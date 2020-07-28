<?php
session_start();

	if(isset($_SESSION['name']))
	{
		//echo $_SESSION['name'];
	}
	else
	{
		//echo "error.....";
		header('location:login.php');
	}
	$id=$_SESSION['id'];
?>
<html>
<head>
<title>sajib roy</title>
<link href="homestyle.css" rel="stylesheet" type="text/css">
<link rel="icon" type="PNG/img" href="logo/Sajb2.jpg" >
</head>
<body>
<nav>
	<label class="logo">Easy Ride</label>
	<div class="list">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="#">About Us</a></li>
		<li><a href="#">Services</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">Feedback</a></li>
		<div class="sublist">
		<li><a href="#">Manage Booking</a>
		<div class="submenu">	
		
		<a href="#">Reschedule</a>
		<a href="#">Show My Ticket</a>
		<a href="#">Email/SMS</a>
		<a href="#">Cancel</a>
		</li>
		</div>
		</div>
		
	</ul>
	</div>
	<div class="logout">
	<img src="logo/logo2.png">
	<p style="color:white">Hi <?php echo $_SESSION['name'];?></p>
	<div class="sub">
	<a href="#">Edit</a>
	<a href="logout.php">Log out</a>
	</div>
	</div>
</nav>
<div class="search_box">
<form action="showdetails.php" method="post" enctype="multipart/form-data">
<div class="from">
<h2>From</h2>
<select name="from" required placeholder="FROM">
	
	<option value="Narengi">Narengi</option>
	<option value="Nunmati">Nunmati</option>
	<option value="Chanmari">Chandmari</option>
	<option value="Guwhati_club">Guwhati Club</option>
	<option value="Reserv_bank">Reserv Bank</option>
</select>
</div>
<div class="from2" >
<h2>To</h2>
<select name="to"required placeholder="TO">	
	<option value="Narengi">Narengi</option>
	<option value="Noonmati">Noonmati</option>
	<option value="Chanmari">Chandmari</option>
	<option value="Guwhati_club">Guwhati Club</option>
	<option value="Reserv_bank">Reserv Bank</option>
	<option value="six mile">Six Mile</option>
</select>
</div>
<div class="cal">
	<h2>Date</h2>
	<input type="date" name="date"  required style="width:175px;height:40px">
</div>
<div class="submit">
	<button name="submit">Search</button>
</div>
</form>
</div>
<h1>Big Savings, Bigger Celebration<br>
<p>On the journey to safety, we don't take shortcuts</p></h1>
<iframe src="https://adtu.in" style="margin-top:60px; width:80%; height:500px; margin-left:100px;"></iframe>
</body>
</html>
