<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$serverName = "localhost";
	$userName = "root";
	$db_password = "";
	$db_Name = "webproject";
	$email = $_POST['email'];
	$password = $_POST['password'];
	$con = new mysqli($serverName, $userName, $db_password, $db_Name);
	if ($con->connect_error) {
				echo $con->connect_error;

			}else{
				echo "Connected\n";
			}

	$query = "SELECT * FROM userdetails where email = '$email' and password = '$password'";
	$result = $con->query($query);


		$db_rec_pw = "";

			if ($result->num_rows > 0) {
				while($row =$result->fetch_assoc()){
					$pw = $row["password"];
				}
				if ($pw == $password) {
					echo "login success\n";
				}else{
					echo "Your password is incorreced";
				}

			}else{
				echo "Login failed";
			}
	?>
</body>
</html>