<?php
	// include('../controller/adminloginaction.php');
	// include('../controller/header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	
</head>
<body >

<h1 align=center style="color:#2c463a;"><b> Login Page </b> </h1>
    <br><br>
	<?php 
		if(isset($_SESSION['error'])){
			echo $_SESSION['error'] ;
			$_SESSION['error'] = "";
		}

	 ?>
	<div>
	<form method="post" action="../Controller/publicLoginControl.php" >
		<table align=center>
			<tr>
				<td>Email: </td>
				<td><input type="text" name="Email"></td>
			</tr>
			<tr>
				<td>Passeord: </td>
				<td><input type="password" name="Password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Longin"></td>
			</tr>
		</table>
	
	</form>
	</div>
</body>
</html>
