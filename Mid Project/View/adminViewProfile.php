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
                    <legend align=center> View Profile </legend>
                    <table border="1" style="border-collapse: collapse;" cellpadding="5">
                        <tr>  
                            <td> Name </td>
                            <td> <?php echo $current_user->Name ?> </td>
                        </tr>
                        <tr>  
                            <td> Gender </td>
                            <td> <?php echo $current_user->Gender ?> </td>
                        </tr>
                        <tr>  
                            <td> Email </td>
                            <td> <?php echo $current_user->Email ?> </td>
                        </tr>
                        <tr>  
                            <td> Phone </td>
                            <td> <?php echo $current_user->Phone ?> </td>
                        </tr>
                        <tr>  
                            <td> Date of Birth </td>
                            <td> <?php echo $current_user->Dob ?> </td>
                        </tr>
                        <tr>  
                            <td> Address </td>
                            <td> <?php echo $current_user->Address ?> </td>
                        </tr>
                        <tr>  
                            <td> Joining Date </td>
                            <td> <?php echo $current_user->JoinDate ?> </td>
                        </tr>
                        <tr>  
                            <td> Profile Picture </td>
                            <td> <img src="<?php echo $current_user->file; ?>" alt="Profile Picture" width="50px" height="50px"> </td>
                        </tr>
                    </table>
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