<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

	<script>
		var modal = document.getElementById('login');


		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}

		function myFunction(){
			var x = document.createElement("INPUT");
		    x.setAttribute("type", "file");
		    document.body.appendChild(x);	
		}
	</script>
	<style type="text/css">
		
	</style>

</head>
<body background="images/player2.png">
	<ul>
		<li style="float: left"><img src="images/logo1.png" width="100px" height="100px"></li>
		<li style="float: left"><h1 style="color: #83D615">Kandy Municipal Sports Complex</h1></li>
  		<li><button onclick="document.getElementById('login').style.display='block'" style="width:auto; background-color: transparent; border: 1px solid transparent"><a class="active" href="#home"><h3>Login</h3></a></button></li>
  		<li><a href="contactUs.html"><h3>Contact us</h3></a></li>
  		<li>
  			<div class="dropdown">
  				<a href="bookingCourts.html" class="dropbtn"><h3>Booking</h3></a>
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

	<h2 class="welcome" align="center">Welcome to Kandy Municipal Sports Complex</h2>
	<p class="welcome" align="center">The largest sports center in Srilanka.We are proudly provide you every kind of<br> sports facilities that satisfied international standards.<br> We highly recommended you to use this website to let know about us and get rid the traffic<br> to booking courts as well as your comfortability.<br> Likewise High standard courts, gymnasium with suitable excercising tricks.  </p>

	<p align="center" style="color: white">You should created an account to booking courts and other necessary things</p><br>

	
	<a href="createAccount.html"><h3 align="center"><button class="createAccount">Create an Account</button></h3></a>

	
	<p align="center">
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
	</p>

	<div id="login" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
     <form action="login.php">
     	 <input type="text" placeholder="Enter Email" name="email" required>

      <input type="password" placeholder="Enter Password" name="password" required>
        
      <input type="submit" name="" value="Login" class="login">
     </form>
    </div>
  </form>
</div>

</body>
</html>