<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $isAllDataSet = true;
        if (empty($_REQUEST["Name"])) {
            echo "Name is required";
            $isAllDataSet = false;
        }
        if(!isset($_REQUEST["Gender"])) {
            $isAllDataSet = false;
            echo "<br> Gender is required";
        }
        if (empty($_REQUEST["Email"])) {
            $isAllDataSet = false;
            echo "<br> Email is required";
        } elseif(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_REQUEST["Email"])) {
            $isAllDataSet = false;
            echo "<br> Please enter a valid email address";
        }
        if (empty($_REQUEST["Phone"])) {
            $isAllDataSet = false;
            echo "<br> Phone is required";
        }
        if (empty($_REQUEST["Dob"])) {
            $isAllDataSet = false;
            echo "<br> Dob is required";
        }
        if (empty($_REQUEST["Address"])) {
            $isAllDataSet = false;
            echo "<br> Address is required";
        } 
        if (empty($_REQUEST["JoinDate"])) {
            $isAllDataSet = false;
            echo "<br> Joining Date is required";
        } 
        if($isAllDataSet) {
            $data = file_get_contents("../Model/jsondata.json");
            $json_arr = json_decode($data, true);
            session_start();
            $current_pass = "";
            foreach ($json_arr as $key => $value) {
                if ($value['Email'] == $_SESSION["Email"]) {
                    $json_arr[$key]['Name'] = $_REQUEST["Name"];
                    $json_arr[$key]['Gender'] = $_REQUEST["Gender"];
                    $json_arr[$key]['Email'] = $_REQUEST["Email"];
                    $json_arr[$key]['Phone'] = $_REQUEST["Phone"];
                    $json_arr[$key]['Dob'] = $_REQUEST["Dob"];
                    $json_arr[$key]['Address'] = $_REQUEST["Address"];
                    $json_arr[$key]['JoinDate'] = $_REQUEST["JoinDate"];
                    break;
                }
            }
            $jsondata = json_encode($json_arr, JSON_PRETTY_PRINT);
            if(file_put_contents("../Data/jsondata.json", $jsondata)) {
                echo "Profile Updated Successfull <br>";
            }else {
                echo "file written failed <br>";
            }
        } else {
            echo "Profile Update UnSuccessfull..!!!! <br>";
            <a href="adminProfEdit.php">Go Back to Edit Profile</a>
        }
    }
?>
