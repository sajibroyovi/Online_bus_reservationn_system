<?php

session_start();

	if(isset($_SESSION['name']))
	{
		
	}
	else
	{
		//echo "error.....";
		header('location:../firstpage/login.php');
	}
	?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="feedback.css" rel="stylesheet" type="text/css">
<link rel="icon" type="PNG/img" href="../logo/Sajb2.jpg" >
</head>
<body>

<nav>
	<label class="logo">Easy Ride</label>
	<div class="list">
	<ul>
		<li><a href="../index.php">Home</a></li>
		<li><a href="#">About Us</a></li>
		<li><a href="#">Services</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">Feedback</a></li>
		<div class="sublist">
		<li><a href="#">Manage Booking</a>
		<div class="submenu">	
		<a href="#">Reschedule</a>
		<a href="../viewticket.php">Show My Ticket</a>
		<a href="#">Email/SMS</a>
		<a href="#">Cancel</a>
		</li>
		</div>
		</div>
		
	</ul>
	</div>
	<div class="logout">
	<img src="../logo/logo2.png">
	<p style="color:white">Hi <?php echo $_SESSION['name'];?></p>
	<div class="sub">
	<a href="#">Edit</a>
	<a href="../logout.php">Log out</a>
	</div>
	</div>
</nav>
<form action="feedback.php" method="POST" enctype="multipart/form-data">
<div class="feedback">
Enter your Name</br>
<input type="text" name="name" required placeholder="Enter your Name" style="width:300px; height:30px; border-radius:5px;"></br></br>
Enter your E-mail</br>
<input type="email" name="email" required placeholder="Enter your Email" style="width:300px; height:30px; border-radius:5px;"></br></br>
Enter your message</br>
<textarea name="message" placeholder="Write something about us.." required style="width:300px; height:50px; border-radius:5px;"></textarea></br>
<div class="send">
<input type="submit" value="Send" name="submit">
</div>
</div>
</form>
</body>
</html>
<?php
include('../dbcon.php');

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$qry="INSERT INTO `feedback`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
	$run=mysqli_query($con,$qry);
	if($run){
		?>
		<script>
		alert('Thank you for your feedback..');
		</script>
		<?php
	}
	else{
		?>
		<script>
		alert('Something went wrong..Please try again..Thank you');
		</script>
		<?php
	}
}
?>