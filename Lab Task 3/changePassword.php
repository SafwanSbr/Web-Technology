<!DOCTYPE HTML>  
<html>
    <head>
        <style>
        .error {color: #FF0000;}
        </style>
    </head>

    <body> 
        <?php
            
            $currentPass = $newPass = $retypePass = "" ;
            $currentEr =  $newpassEr = "";

            if (isset($_POST["submit"])) 
            {
                if (empty($_POST["currentPass"])) 
                {
                    $currentEr = "Current Password is required";
                } 
                else {
                    $currentPass = $_POST["currentPass"];
                }

                if (empty($_POST["newPass"])) {
                    $passwordErr = "New Password is required";
                } 
                else {
                    $newPass = $_POST["newPass"];
                    if (strlen($newPass) < 8) {
                        $newpassEr = "Must contain 8 character";
                    }
                    if (!preg_match('/[%@#$]/',$newPass)) {
                        $newPass = "Must contain one of the [@ # $ %]";
                    }
                }
                if (empty($_POST["retypePass"])) {
                    if($newpassEr == "") $newpassEr = "New Password is required";
                } 
                else {
                    $retypePass = $_POST["retypePass"];
                    if ($newPass != $retypePass) {
                        $newpassEr = "Password doesn't match.";
                    }
                }
            }
        ?>

        <fieldset>
            <legend>Signe In</legend>

            <form method = "post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <table>
                    <tr>
                        <td>Current Password: </td>
                        <td><input type="password" name="currentPass" value="<?php echo $currentPass?>"><span>*</span></td>
                    </tr>
                    <tr>
                        <td>New Password: </td>
                        <td><input type="password" name="newPass" value="<?php echo $newPass?>"><span>*</span></td>
                    </tr>
                    <tr>
                        <td>Re-Enter New Password: </td>
                        <td><input type="password" name="retypePass" value="<?php echo $retypePass?>"><span>*</span></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit"></td>
                    </tr>
                </table>
            </form>
        </fieldset>

        <?php
            if($currentEr == "" && $newpassEr == ""){
                echo "<h2>Your Input:</h2>";
                echo $currentPass;
                echo "<br>";
                echo $newPass;
            }
            else{
                echo $currentEr;
                echo "<br>";
                echo $newpassEr;
                echo "<br>";
            }
        ?>

    </body>
</html>