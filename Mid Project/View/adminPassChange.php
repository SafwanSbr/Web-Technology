<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <?php include 'Layout/logged_in_header.php'; ?>
    <?php //include '../Controller/adminProfileProcessControl.php'; ?>
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="adminPortal.php"> Dashboard </a> </td>
            <td rowspan="5">  
                <fieldset>
                    <legend align=center> Change Password </legend>
                    <form action="../Controls/changePassword.php" method="POST" enctype="multipart/form-data">
                        <table>
                            <tr>  
                                <td>Current Password</td>
                                <td><input type="password" name="current_pass" placeholder="Enter current password"></td>
                            </tr>
                            <tr>  
                                <td>New Password</td>
                                <td><input type="password" name="new_pass" placeholder="Enter new password"></td>
                            </tr>
                            <tr>  
                                <td>Retype New Password</td>
                                <td><input type="password" name="retype_pass" placeholder="Retype new password"></td>
                            </tr>
                            <tr>
                                <td> <input type="submit" value="Submit"> </td>
                                <td> <input type="reset" value="Reset"> </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </td>
        </tr>
        <tr><td> <a href="adminViewProfile.php"> View Profile </a> </td></tr>
        <tr><td> <a href="adminProfileEdit.php"> Edit Profile </a> </td></tr>
        <tr><td> <a href="adminPpChange.php"> Change Profile Picture </a> </td></tr>
        <tr><td> <a href="adminPassChange.php"> Change Password </a> </td></tr>
    </table>
    <?php include 'Layout/footer.php'; ?>
</body>
</html>