<?php
    session_start();
    if(!empty($_SESSION["Email"])) {
        header("Location: ../View/adminPortal.php");
    }
    if(isset($_REQUEST["login"])) {
        $is_found = false;
        if(empty($_REQUEST["Email"])) {
            echo "Please enter your Email address";
        } elseif(empty($_REQUEST["Password"])) {
            echo "Please enter your password";
        } else {
            $filedata = file_get_contents("../Model/jsondata.json");
            $phpobj = json_decode($filedata);
            foreach($phpobj as $myobj) {
                if($myobj->Email == $_REQUEST["Email"] && $myobj->Password == $_REQUEST["Password"]) {
                    $_SESSION["Email"] = $myobj->Email;
                    header("Location: ../View/adminPortal.php");
                    $is_found = true;
                    break;
                }
            }
            if(!$is_found) {
                echo "login failed";
            }
        }
    }
?>