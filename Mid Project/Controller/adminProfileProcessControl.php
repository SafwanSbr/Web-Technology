<?php
    session_start();
    if(empty($_SESSION["Email"])) {
        header("Location: ../View/adminLogin.php");
    }
    $jsondata = file_get_contents("../Model/jsondata.json");
    $phpdata = json_decode($jsondata);
    $current_user = NULL;
    $current_user_name = "";
    foreach($phpdata as $myobj) {
        if($_SESSION["Email"] == $myobj->Email) {
            $current_user = $myobj;
            break;
        }
    }
?>