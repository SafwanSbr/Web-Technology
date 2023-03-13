<!DOCTYPE HTML>  
<html>
    <head>
        <style>
        .error {color: #FF0000;}
        </style>
    </head>

    <body> 
        <?php
            
            $nameErr = $passwordErr = $meErr = "" ;
            $name =  $password = "";

            if (isset($_POST["submit"])) 
            {
                if (empty($_POST["name"])) 
                {
                    $nameErr = "User Name is required";
                } 
                else {
                    $name = test_input($_POST["name"]);
                    if (strlen($name) < 2) {
                        $nameErr = "Must contain at least two characters";
                    }
                    if (!preg_match('/^[A-Za-z0-9._-]+$/', $name)) {
                        $nameErr = "can contain alpha numeric characters, period, dash or underscore only";
                    }
                }
                if (empty($_POST["password"])) {
                    $passwordErr = "Password is required";
                } 
                else {
                    $password = $_POST["password"];
                    if (strlen($password) < 8) {
                        $passwordErr = "Must contain 8 character";
                    }
                    if (!preg_match('/[%@#$]/',$password)) {
                        $passwordErr = "Must contain one of the [@ # $ %]";
                    }
                }
            }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }
        ?>

        <fieldset>
            <legend>Signe In</legend>

            <form method = "post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <table>
                    <tr>
                        <td>User Name: </td>
                        <td><input type="text" name="name" value="<?php echo $name?>"><span>*</span></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password" value="<?php echo $password?>"><span>*</span></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit"></td>
                        <td><input type="checkbox" name="remember me"><label for="Remember">Remember Me</label>
                    </tr>
                    <tr>
                        <td><a href="">Forget Password</a></td>
                    </tr>
                </table>
            </form>
        </fieldset>

        <?php
            if($nameErr == "" && $passwordErr == ""){
                echo "<h2>Your Input:</h2>";
                echo $name;
                echo "<br>";
                echo $password;
            }
            else{
                echo $nameErr;
                echo "<br>";
                echo $passwordErr;
                echo "<br>";
                //30/60-70
            }
        ?>

    </body>
</html>