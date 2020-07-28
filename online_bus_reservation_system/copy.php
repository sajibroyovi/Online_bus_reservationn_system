<?php
session_start();

	if(isset($_SESSION['name']))
	{
		//echo $_SESSION['name'];
	}
	else
	{
		//echo "error.....";
		header('location:firstpage/login.php');
	}
?>
<html>
<head>
<title>Booking</title>
<link href="bookstyle.css" type="text/css" rel="stylesheet">
<link href="buttonstyle.css" rel="stylesheet" type="text/css">
<link rel="icon" type="PNG/img" href="logo/Sajb2.jpg" >
</head>
<body>

<nav>
<label class="logo">Bus Ticket</label>
<h1><marquee>Welcome to EASYRIDE</marquee></h1>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="viewticket.php">View Tickets</a></li>
</ul>
<div class="logout">
	<img src="logo/logo2.png">
	<label style="color:white"><?php echo $_SESSION['name'];?></label>
	
	</div>
</nav>
<div class="wrapper">
	<form method="POST" action="book.php" enctype="multipart/form-data">
		<div class="box">
			Full Name<br>
			<input type="text" class="input" name="fname"required placeholder="Full Name"><br><br>
			E-mail<br>
			<input type="email" class="input" name="email" required placeholder="E-mail"><br><br>
			Phone Number<br>
			<input type="text" class="input" name="phone" required placeholder="Phone Number"><br><br>
			Seat Number<br>
			<div class="wrapper">
			<script>
			function sendData(){
				alert('Alredy booked');
			}
			</script>
			<script>
			function getId(){
				alert('');
			}
			</script>
				<?php
				include ('dbcon.php');
				$selsql="SELECT * FROM `booking`";
				
				$result=mysqli_query($con,$selsql);
				$res=mysqli_num_rows($result);
				#$B=rand(1,27);

				for($i=1;$i<=3;$i++)
				{
				?>
				
				<div class="seat">
					<?php ?>A<?php echo $i?>
						<?php
						$seat="A".$i;
						$res1=mysqli_fetch_assoc($result);
						
						if($res1['seat']=="notbooked")
							{ 
						?>
						<label class="main"><input type="checkbox" <?php $x=$res1['id']?> name="check_list" value="<?php $i?>A<?php echo $i?>"/><span class="geekmark"><a href="copy.php?id=<?php echo $res1['id']?>"><img src="logo/seat.png" height="30em"> </span></label>
							
							<?php
							}
							else
							{ ?>
							<label class="main"><input type="checkbox" onclick="sendData()"/><span class="geekmark1"><img src="logo/red2.png" height="30em"></span></label>
							<?php
							}
							?>
							
					
					
				</div>
				
				
				<div class="seat">
					<?php ?>B<?php echo $i?>
						<?php
						$seat="B".$i;
						
						$res1=mysqli_fetch_assoc($result);
						if($res1['seat']=="notbooked")
							{ 
						
						?>
							<label class="main"><input type="checkbox" <?php $x=$res1['id']?> name="check_list" value="<?php $i?>B<?php echo $i?>"/><span class="geekmark"><a href="copy.php?id=<?php echo $res1['id']?>"><img src="logo/seat.png" height="30em"> </span></label>
							
							<?php
							}
							else{ ?>
							<label class="main"><input type="checkbox" onclick="sendData()"/><span class="geekmark1"><img src="logo/red2.png" height="30em"></span></label>
							<?php
							}
							?>
					
				</div>
				
				<div class="seat">
					<?php ?>C<?php echo $i?>
						<?php
						$seat="C".$i;
						$res1=mysqli_fetch_assoc($result);
						if($res1['seat']=="notbooked")
						{ 
					
					?>
						<label class="main"><input type="checkbox" <?php $x=$res1['id']?> name="check_list" value="<?php $i?>C<?php echo $i?>"/><span class="geekmark"><a href="copy.php?id=<?php echo $res1['id']?>"><img src="logo/seat.png" height="30em"> </span></label>
							
							<?php
							}
							else{ ?>
							<label class="main"><input type="checkbox" onclick='sendData()'/><span class="geekmark1"><img src="logo/red2.png" height="30em"></span></label>
							<?php
							}
							?>
					
				</div>
				<div class="seat">
					<?php ?>D<?php echo $i?>
						<?php
						$seat="A".$i;
						$res1=mysqli_fetch_assoc($result);
						
						if($res1['seat']=="notbooked")
							{ 
						
						?>
						<label class="main"><input type="checkbox" <?php $x=$res1['id']?> name="check_list" value="<?php $i?>D<?php echo $i?>"/><span class="geekmark"><a href="copy.php?id=<?php echo $res1['id']?>"><img src="logo/seat.png" height="30em"> </span></label>
							
							<?php
							}
							else
							{ ?>
							<label class="main"><input type="checkbox" onclick="sendData()"/><span class="geekmark1"><img src="logo/red2.png" height="30em"></span></label>
							<?php
							}
							?>
							
					
					
				</div>
				<div class="seat">
					<?php ?>E<?php echo $i?>
						<?php
						$seat="A".$i;
						$res1=mysqli_fetch_assoc($result);
						
						if($res1['seat']=="notbooked")
							{ 
						
						?>
						<label class="main"><input type="checkbox" <?php $x=$res1['id']?> name="check_list" value="<?php $i?>E<?php echo $i?>"/><span class="geekmark"><a href="copy.php?id=<?php echo $res1['id']?>"><img src="logo/seat.png" height="30em"> </span></label>
							
							<?php
							}
							else
							{ ?>
							<label class="main"><input type="checkbox" onclick="sendData()"/><span class="geekmark1"><img src="logo/red2.png" height="30em"></span></label>
							<?php
							}
							?>
							
					
					
				</div>
				<div class="seat">
					<?php ?>F<?php echo $i?>
						<?php
						$seat="A".$i;
						$res1=mysqli_fetch_assoc($result);
						
						if($res1['seat']=="notbooked")
							{
						
						?>
						<label class="main"><input type="checkbox" <?php $x=$res1['id']?> name="check_list" value="<?php $i?>F<?php echo $i?>"/><span class="geekmark"><a href="copy.php?id=<?php echo $res1['id']?>"><img src="logo/seat.png" height="30em"> </span></label>
							
							<?php
							}
							else
							{ ?>
							<label class="main"><input type="checkbox" onclick="sendData()"/><span class="geekmark1"><img src="logo/red2.png" height="30em"></span></label>
							<?php
							}
							?>
							
					
					
				</div>
				<div class="seat">
					<?php ?>G<?php echo $i?>
						<?php
						$seat="A".$i;
						$res1=mysqli_fetch_assoc($result);
						
						if($res1['seat']=="notbooked")
							{
						
						?>
						<label class="main"><input type="checkbox" <?php $x=$res1['id']?> name="check_list" value="<?php $i?>G<?php echo $i?>"/><span class="geekmark"><a href="copy.php?id=<?php echo $res1['id']?>"><img src="logo/seat.png" height="30em"> </span></label>
							
							<?php
							}
							else
							{ ?>
							<label class="main"><input type="checkbox" onclick="sendData()"/><span class="geekmark1"><img src="logo/red2.png" height="30em"></span></label>
							<?php
							}
							?>
							
					
					
				</div>
				<div class="seat">
					<?php ?>H<?php echo $i?>
						<?php
						$seat="A".$i;
						$res1=mysqli_fetch_assoc($result);
						
						if($res1['seat']=="notbooked")
							{
						
						?>
						<label class="main" ><input type="checkbox" <?php $x=$res1['id']?> name="check_list" value="<?php $i?>H<?php echo $i?>"/><span class="geekmark"><a href="copy.php?id=<?php echo $res1['id']?>"><img src="logo/seat.png" height="30em"> </span></label>
							
							<?php
							}
							else
							{ ?>
							<label class="main"><input type="checkbox" onclick="sendData()"/><span class="geekmark1"><img src="logo/red2.png" height="30em"></span></label>
							<?php
							}
							?>
							
					
					
				</div>
				<div class="seat">
					<?php ?>I<?php echo $i?>
						<?php
						$seat="A".$i;
						$res1=mysqli_fetch_assoc($result);
						
						if($res1['seat']=="notbooked")
							{ 
						
						?>
						<label class="main" ><input type="checkbox" <?php $x=$res1['id']?> name="check_list" value="<?php $i?>I<?php echo $i?>"/><span class="geekmark"><a href="copy.php?id=<?php echo $res1['id']?>"><img src="logo/seat.png" height="30em"> </span></label>
							
							<?php
							
							}
							else
							{ ?>
							<label class="main"><input type="checkbox" onclick="sendData()"/><span class="geekmark1"><img src="logo/red2.png" height="30em"></span></label>
							<?php
							}
							?>
							
					
					
				</div>
				<?php
				}echo $x;
				?>
				
			</div>
			

			<div class="submit">
				<button type="submit" name="submit">Book</button>
			</div>
			<div class="relative">
				<ul>
					<li><img src="logo/seat.png" height="30em">Available</li>
					<li><img src="logo/red2.png"  height="30em">Booked</li>
					<li><img src="logo/select.png"  height="30em">Selected</li>
				</ul>
			</div>
		</div>
	</form>

</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	include ('dbcon.php');
	$seat=$_GET['id'];
	$name=$_POST['fname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$seatnumber=$_POST['check_list'];
	#$sql="INSERT INTO `booking`(`name`, `email`, `phone`, `seat`)VALUES ('$name','$email','$phone','$seatnumber')";
	$sql="UPDATE `booking` SET `name`='$name',`email`='$email',`phone`='$phone',`seat`='$seatnumber' WHERE `id`='$seat'";
	$run=mysqli_query($con,$sql);

	
	if($run==true)
	{
		?>
		<script>
		alert('Success');
		</script>
		<?php
	}
    else
	{
		?>
		<script>
		alert('Error');
		</script>
		<?php
	}		

}
 ?>