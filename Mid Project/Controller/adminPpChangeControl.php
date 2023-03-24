<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $isAllDataSet = true;
        if(empty($_FILES["image"]["name"])) {
            echo "enter a file";
            $isAllDataSet = false;
        }
        else {
            session_start();
            move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_SESSION["Email"].".jpg");
            echo "Profile Picture Updated";
        }
    }
?>