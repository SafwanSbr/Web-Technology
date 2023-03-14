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
            <td rowspan="5"> Welcome </td>
        </tr>
        <tr><td> <a href="adminViewProfile.php"> View Profile </a> </td></tr>
        <tr><td> <a href="adminProfileEdit.php"> Edit Profile </a> </td></tr>
        <tr><td> <a href="adminPpChange.php"> Change Profile Picture </a> </td></tr>
        <tr><td> <a href="adminPassChange.php"> Change Password </a> </td></tr>
    </table>

    <?php include 'Layout/footer.php'; ?>
</body>
</html>
