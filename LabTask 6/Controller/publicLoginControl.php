<?php
	include('../Model/model.php');

	$email = $password = "";
	$allSet = true;

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		$email    = $_POST["Email"];
		$password = $_POST["Password"];

		if(empty($email)){
			echo "<br>Email Required<br>";
			$allSet = false;
		}
		if(empty($password)){
			echo "<br>Password Required<br>";
			$allSet = false;
		}

		if($allSet){
			$dataFound = checklogin($email, $password);
			if($dataFound){
				$user = viewprofile($email, $password);
				echo "Welcome ";
				echo $user[0]['Name'];
			}
			else{
				echo "Email/Password don't match <br> Please try Again! <br>";
			}
		}
	}
?>