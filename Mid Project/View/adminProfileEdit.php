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
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="adminPortal.php"> Dashboard </a> </td>
            <td rowspan="5"> 
            <fieldset>
                <legend align=center> Edit Profile </legend>
                <form action="../Controls/edit_profile.php" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td> <label for="Name"> Name </label> </td>
                            <td> <input type="text" name="Name" value="<?php echo $current_user->Name; ?>"> </td>
                        </tr>
                        <tr>
                            <td> <label for="Gender"> Gender </label> </td>
                            <td> 
                                <input type="radio" name="Gender" value="male" <?php if ($current_user->Gender == 'male') echo 'checked'; ?>> 
                                <label for="Male"> Male </label>
                                <input type="radio" name="Gender" value="female" <?php if ($current_user->Gender == 'female') echo 'checked'; ?>> 
                                <label for="Female"> Female </label>
                                <input type="radio" name="Gender" value="other" <?php if ($current_user->Gender == 'other') echo 'checked'; ?>> 
                                <label for="Other"> Other </label>
                            </td>
                        </tr>
                        <tr>
                            <td> <label for="Email"> Email </label> </td>
                            <td> <input type="text" name="Email" value="<?php echo $current_user->Email; ?>"> </td>
                        </tr>
                        <tr>
                            <td> <label for="Phone"> Phone </label> </td>
                            <td> <input type="text" name="Phone" value="<?php echo $current_user->Phone; ?>"> </td>
                        </tr>
                        <tr>
                            <td> <label for="Dob"> Date of Birth </label> </td>
                            <td> <input type="text" name="Dob" value="<?php echo $current_user->Dob; ?>"> </td>
                        </tr>
                        <tr>
                            <td> <label for="Address"> Address </label> </td>
                            <td> <input type="text" name="Address" value="<?php echo $current_user->Address; ?>"> </td>
                        </tr>
                        <tr>
                            <td> <label for="JoinDate"> Joining Date </label> </td>
                            <td> <input type="text" name="JoinDate" value="<?php echo $current_user->JoinDate; ?>"> </td>
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