<?php
    include ('../Controller/adminLoginControl.php');
    if (isset($_COOKIE['login']) && $_COOKIE['login'] == 'true') {
        header('Location: adminPortal.php');
        exit;
    }
    else if(isset($_POST['Email']) && isset($_POST['Password'])){
        if($_POST['RememberMe']){
            setcookie('login', 'true', time() + (86400 * 30), '/');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php// include '../../Layouts/header.php'; ?>
    <fieldset>
        <legend> Admin Login </legend>
        <form action="../Controller/adminLoginControl.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> <label for="Email"> Email </label> </td>
                    <td> <input type="text" name="Email" placeholder="Enter Email"> </td>
                </tr>
                <tr>
                    <td> <label for="Password"> Password </label> </td>
                    <td> <input type="password" name="Password" placeholder="Enter Password"> </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="login" value="Log In"> </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="RememberMe" value="Remember">Remember Me for 1 Month
                    </td>
                </tr>

            </table>
        </form>
    </fieldset>
    <?php include 'Layout/footer.php'; ?>
</body>
</html>