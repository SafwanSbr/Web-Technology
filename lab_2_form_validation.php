<!DOCTYPE HTML>
<html>
    <head>
        <title>Form Validation</title>
    </head>

    <body>
        
        <?php
            $name = $email = $phone = $gender = $dob = $degree = $bloodGroup = "";
            $textPattern = "/^[a-zA-Z-' ]*$/";
            $numberPattern = "/^[0-9]*$/";
            $emailPattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
            $isAllDataSet = true;

            if($_SERVER["REQUEST_METHOD"] == "POST" ){

                if(empty($_POST["name"])){
                    echo "Name is Required";
                    $isAllDataSet = false;
                }
                else {
                    $name = $_POST["name"];
                    if(!preg_match($textPattern, $name)){
                        echo "Only letters and white space allowed\n";
                        $name = "";
                        $isAllDataSet = false;
                    }
                }
                //Email
                if(empty($_POST["email"])){
                    echo "Email is Required";
                    $isAllDataSet = false;
                }
                else {
                    $email = $_POST["email"];
                    if(!preg_match($emailPattern, $email)){
                        echo "Please Insert Valid Email ID\n";
                        $email = "";
                        $isAllDataSet = false;
                    }
                }
                //Phone Number
                if(empty($_POST["phone"])){
                    echo "Phone Number is Required";
                    $isAllDataSet = false;
                }
                else {
                    $phone = $_POST["phone"];
                    if(!preg_match($numberPattern, $phone)){
                        echo "Please Insert Valid Phone Number\n";
                        $email = "";
                        $isAllDataSet = false;
                    }
                }
                //Gender
                if(empty($_POST["gender"])){
                    echo "Gender is Required\n";
                    $isAllDataSet = false;
                }
                else {
                    $gender = $_POST["gender"];
                }
                //Degree
                if(empty($_POST["degree"])){
                    echo "Degree is Required\n";
                    $isAllDataSet = false;
                }
                else {
                    $degree = $_POST["degree"];
                }
                //Blood Group
                if(empty($_POST["bloodGroup"])){
                    echo "Blood Group is Required";
                    $isAllDataSet = false;
                }
                else {
                    $bloodGroup = $_POST["bloodGroup"];
                }
            }
        ?>

        <form method = "post" action = "<?php echo $_SERVER["PHP_SELF"]?>">
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" placeholder="Enter Name"></td>
                </tr>
                <tr>
                    <td>Phone: </td>
                    <td><input type="text" name = "phone" placeholder="01*********"></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name = "email" placeholder="*******@*****.*****"></td>
                </tr>
                <tr>
                    <td>Date Of Birth </td>
                    <td><input type="text" name = "dob" placeholder="dd/mm/yyyy"></td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td><input type="radio" name = "gender" id = "degree" value="Male">
                        <label for="Male">Male</label>
                        <input type="radio" name="gender" id = "degree" value="Female">
                        <label for="Female">Female</label>
                        <input type="radio" name="gender" id = "degree" value="Other">
                        <label for="Other">Other</label>
                    </td>
                </tr>
                <tr>
                    <td>Degree: </td>
                    <td><input type="radio" name = "degree" value="SSC">
                        <label for="SSC">SSC</label>
                        <input type="radio" name="degree" value="HSC">
                        <label for="HSC">HSC</label>
                        <input type="radio" name="degree" value="BSc">
                        <label for="BSc">BSc</label>
                        <input type="radio" name="degree" value="MSc">
                        <label for="MSc">MSc</label>
                    </td>
                </tr>
                <tr>
                    <td>Blood Group: </td>
                    <td>
                        <select name="bloodGroup" id = "bloodGroup">
                            <option value="">--Please Select Your Blood Group--</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                </tr>
        </form>
        


    </body>
</html>
