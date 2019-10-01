
	<?php
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$db_Name = "webproject";
	$con = new mysqli($serverName, $userName, $password, $db_Name);
	if ($con->connect_error) {
				echo $con->connect_error;

			}else{
				echo "Connected";
			}
	
	$userDetails = "INSERT INTO userdetails(fname,lname,email,mobileNumber,password)
				 	VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[mobile]','$_POST[password]')";
				 	
	if(mysqli_query($con,$userDetails)){
		echo "Record inserted successfully";
	}
	else{
		echo "Error: Not ablw to execute";
	}

	echo "Your Account Successfully created";

	mysqli_close($con)

?>
