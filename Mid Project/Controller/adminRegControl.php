<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $gender = $email = $phone = $dob = $address = $joiningDate = $password = $confirmPassword = ""; 
        $isAllDataSet = true;

        if (empty($_REQUEST["Name"])) {
            echo "Name is required";
            $isAllDataSet = false;
        }
        if(!isset($_REQUEST["Gender"])) {
            $isAllDataSet = false;
            echo "<br> Gender is required";
        }
        if (empty($_REQUEST["Email"])) {
            $isAllDataSet = false;
            echo "<br> Email is required";
        } 
        else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_REQUEST["Email"])) {
            $isAllDataSet = false;
            echo "<br> Please enter a valid email address";
        }
        if (empty($_REQUEST["Phone"])) {
            $isAllDataSet = false;
            echo "<br> Phone is required";
        }
        if (empty($_REQUEST["Dob"])) {
            $isAllDataSet = false;
            echo "<br> Dob is required";
        }
        if (empty($_REQUEST["Address"])) {
            $isAllDataSet = false;
            echo "<br> Address is required";
        } 
        if (empty($_REQUEST["JoinDate"])) {
            $isAllDataSet = false;
            echo "<br> Joining Date is required";
        } 
        if (empty($_REQUEST["Password"]) or empty($_REQUEST["ConfirmPassword"])) {
            $isAllDataSet = false;
            echo "<br> Password and Confirm Password is required";
        } 
        elseif ($_REQUEST["Password"] != $_REQUEST["ConfirmPassword"]) {
            $isAllDataSet = false;
            echo "<br> Password and Confirm Password must be same";
        }
        if(empty($_FILES["image"]["name"])) {
            echo "enter a file";
            $isAllDataSet = false;
        } 
        else {
            move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_REQUEST["Email"].".jpg");
        }
        if($isAllDataSet) {
            $existingdata = file_get_contents("../Model/jsondata.json");
            $phpdata = json_decode($existingdata);
            $formdata = array(
                "Name"=> $_REQUEST["Name"],
                "Gender"=> $_REQUEST["Gender"],
                "Email"=> $_REQUEST["Email"],
                "Phone"=> $_REQUEST["Phone"],
                "Dob"=> $_REQUEST["Dob"],
                "Address"=> $_REQUEST["Address"],
                "JoinDate"=> $_REQUEST["JoinDate"],
                "Password"=> $_REQUEST["Password"],
                "file"=>"../Uploads/".$_REQUEST["Email"].".jpg"
            );
            $phpdata[] = $formdata;
            $jsondata = json_encode($phpdata, JSON_PRETTY_PRINT);
            if(file_put_contents("../Model/jsondata.json", $jsondata)) {
                echo "Registration Successfull <br>";
            }else {
                echo "file written failed";
            }
        } else {
            echo "<br>Registration UnSuccessfull..!!!! <br>";
            echo "<br>";
        }
    }
?>