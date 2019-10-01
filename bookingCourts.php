<!DOCTYPE html>
<html>
<head>
	<title>Booking Badminton Courts</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.column{
			float: left;
    width: 40%;
    padding: 10px;
    height: 100vh; 
    margin-bottom: 50px;
		}
		li a{
			color: black
		}
		.transpbox {
		    box-shadow: 0 4px 8px 0 #8F8C65;
		    width: 550px;
		    margin-left: 150px;
		    height: 650px;
		    display: inline-block;
		    background-color: white;
		    opacity: 0.8

		}
		input{
			width: 200px;
	height: 40px;
	margin-top: 10px;
	text-align: center;
	background-color: #FAFFFB
		}
		.sport{
			width: 200px;
	height: 40px;
	margin-top: 10px;
	text-align: center;
	background-color: #FAFFFB
		}
		td{
			padding: 15px 25px 0 25px;
			margin-top: 10px
		}
		.booking{
			background-color: green;
			color: white
		}
	
	</style>
</head>
<body background="images/back5.jpg">
	<ul>
		<li style="float: left"><img src="images/logo1.png" width="100px" height="100px"></li>
		<li style="float: left"><h1 style="color: #000000">Kandy Municipal Sports Complex</h1></li>
  		<li><a class="active" href="#home"><h3>Login</h3></a></li>
  		<li><a href="contactUs.html"><h3>Contact us</h3></a></li>
  		<li>
  			<div class="dropdown">
  				<a href="bookingCourts.html" class="dropbtn" style="color: #000000"><h3>Booking</h3></a>
    			<div class="dropdown-content">
      				<a href="#">Badminton Courts</a>
      				<a href="#">Tennis Courts</a>
      				<a href="#">Table Tennis court</a>
    			</div>
  			</div>
  		</li>
  		<li><a href="about.html"><h3>About us</h3></a></li>
  		<li><a href="index.html"><h3>Home</h3></a></li>
	</ul>
	<div class="column1" style="margin-left: 150px">
		<div class="transpbox">
				<h1 style="color: #000000; padding-left:10px; text-align: center">Booking Courts</h1>
				<form class="signup" name="signup" action="book.php" method="post">
					<table>
						<tr>
							<td>
								<label>Sport</label>
							</td>
							<td>
							<select class="sport" name="Sport">
								<option>Badminton</option>
								<option>Tennis</option>
								<option>Table Tennis</option>
							</select>
							</td>
						</tr>
						<tr>
							<td><label>How many courts do you need</label></td>
							<td><input class="book" type="text" name="noOfCourts" id=""><br></td>
						</tr>
						<tr>
							<td><label>What is the first date</label></td>
							<td><input class="book" type="date" name="fDate"></td>
						</tr>
						<tr>
							<td><label>No Of Players</label></td>
							<td><input class="book" type="text" name="noOfPlayers"></td>
						</tr>
						<tr>
							<td><label>From(Please use standard time(ex: 4.00 pm : 16.00))</label></td>
							<td>
								<input type="time" name="timeFrom">
								
							</td>
						</tr>
						<tr>
							<td><label>To</label></td>
							<td>
								<input type="time" name="timeTo">
							</td>
						</tr>
						<tr>
							<td><label>Need a Couch</label></td>
							<td>
								<select name="couchNeed" class="sport">
									<option>Yes</option>
									<option>No</option>
								</select>
							</td>
						</tr>
					</table>
					<input type="submit" name="" class="booking" value="Book" style="margin-left: 160px">
				</form>
			</div>

	</div>
</body>
</html>