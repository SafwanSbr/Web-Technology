<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
</head>
<body>
    <?php //include '../../Layouts/header.php'; ?>
    <fieldset>
        <legend> Registration </legend>
        <form action="../Controller/adminRegControl.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> <label for="Name"> Name </label> </td>
                    <td> <input type="text" name="Name" placeholder="Enter Name"> </td>
                </tr>
                <tr>
                    <td> <label for="Gender"> Gender </label> </td>
                    <td> 
                        <input type="radio" name="Gender" value="male"> 
                        <label for="Male"> Male </label>
                        <input type="radio" name="Gender" value="female"> 
                        <label for="Female"> Female </label>
                        <input type="radio" name="Gender" value="other"> 
                        <label for="Other"> Other </label>
                    </td>
                </tr>
                <tr>
                    <td> <label for="Email"> Email </label> </td>
                    <td> <input type="text" name="Email" placeholder="Enter Email"> </td>
                </tr>
                <tr>
                    <td> <label for="Phone"> Phone </label> </td>
                    <td> <input type="text" name="Phone" placeholder="Enter Phone"> </td>
                </tr>
                <tr>
                    <td> <label for="Dob"> Date of Birth </label> </td>
                    <td> <input type="date" name="Dob" placeholder="Enter Dob"> </td>
                </tr>
                <tr>
                    <td> <label for="Address"> Address </label> </td>
                    <td> <input type="text" name="Address" placeholder="Enter Address"> </td>
                </tr>
                <tr>
                    <td> <label for="JoinDate"> Joining Date </label> </td>
                    <td> <input type="text" name="JoinDate" placeholder="Enter Joining Date"> </td>
                </tr>
                <tr>
                    <td> <label for="Password"> Password </label> </td>
                    <td> <input type="password" name="Password" placeholder="Enter Password"> </td>
                </tr>
                <tr>
                    <td> <label for="ConfirmPassword"> Confirm Password </label> </td>
                    <td> <input type="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm Password"> </td>
                </tr>
                <tr>
                    <td> <label for="ProfilePic"> Profile Photo </label> </td>
                    <td> <input type="file" name="image"> </td>
                </tr>
                <tr>
                    <td> <input type="submit" value="Submit"> </td>
                    <td> <input type="reset" value="Reset"> </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php// include '../../Layouts/footer.php'; ?>
</body>
</html>