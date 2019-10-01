<?php
$serverName = "localhost";
	$userName = "root";
	$password = "";
	$db_Name = "webproject";
	 /*$timeFrom = $_POST[timeFrom];
	 $newTime =date("H:i:sa",$timeFrom);*/
	$con = new mysqli($serverName, $userName, $password, $db_Name);
	if ($con->connect_error) {
				echo $con->connect_error;

			}else{
				echo "Connected";
			}
	
	$bookInfo = "INSERT INTO bookingcourts (Sport,noOfCourts,fDate,timeFrom,timeTo,noOfPlayers,couchNeed) VALUES ('$_POST[Sport]','$_POST[noOfCourts]','$_POST[fDate]','$_POST[timeFrom]','$_POST[timeTo]','$_POST[noOfPlayers]','$_POST[couchNeed]')";
	if(mysqli_query($con,$bookInfo)){
		echo "Booking info inserted successfully";
	}
	else{
		echo "Error: Not able to execute";
	}

	
	$userInputTime = strtotime('$_POST[timeFrom]');
	$userInputDate = strtotime('$_POST[fDate]');
	$userInputSport = $_POST['Sport'];

	$db_timeFrom = strtotime("SELECT timeFrom FROM bookingcourts where fdate = '$userInputDate' and Sport = '$userInputSport'");
	
	if($userInputTime == $db_timeFrom){
		echo "The booking cannot be arranged.The date and time has been already booked";
	}

	mysqli_close($con);

?>