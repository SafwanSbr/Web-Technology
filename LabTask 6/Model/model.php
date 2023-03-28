<?php 
    require_once 'connect.php';

    function checklogin($email, $password) {
		$conn = connect();
		if ($conn) {

			$sql = "SELECT id FROM userinfo WHERE Email = '" . $email . "' and password = '" . $password . "'";

			$res = mysqli_query($conn, $sql);

			if ($res->num_rows === 1)
				return true;
			return false;
		}
	}

    function viewprofile($email, $password) {
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM userinfo WHERE Email = '" . $email . "' and password = '" . $password . "'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}

	function adduser($name, $gender, $email, $phone, $dob, $address, $password, $pic){
		$conn = connect();
		if($conn){
	
			$stmt = $conn->prepare("INSERT INTO userinfo (Name,	Gender,	Email, Phone, Date_Of_Birth, Address, Password, Picture) VALUES(?,?,?,?,?,?,?,?)");
			$stmt->bind_param("ssssssss", $name, $gender, $email, $phone, $dob, $address, $password, $pic);
	
			$stmt->execute();
			return true;
		}
		else return false;
	}
	
	

?>