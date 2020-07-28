<?php
session_start();

	if(isset($_SESSION['name']))
	{
		
	}
	else
	{
		//echo "error.....";
		header('location:login.php');
	}
?>
<html>
<head>
<title>Show details</title>
<link href="showdetails.css" type="text/css" rel="stylesheet">
<link rel="icon" type="PNG/img" href="logo/Sajb2.jpg">
</head>
<body>
<nav>
	<label class="logo">Easy Ride</label>
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
		<a href="viewticket.php">Show My Ticket</a>
		<a href="#">Email/SMS</a>
		<a href="#">Cancel</a>
		</li>
		</div>
		</div>
	</ul>
	<div class="logout">
	<img src="logo/logo2.png">
	<p style="color:white">Hi <?php echo $_SESSION['name'];?></p>
	<div class="sub">
	<a href="#">Edit</a>
	<a href="logout.php">Log out</a>
	</div>
	</div>
</nav>
<label style="margin-top:50px; margin-left:150px; background-color:#FFF;font-weight:bold; font-size:20px; cursor:pointer;"><a href="index.php">Back</a></label>
<div class="details">
<?php
if(isset($_POST['submit']))
{
	
	include('dbcon.php');
	$from=$_POST['from'];
	$to=$_POST['to'];
	$date=$_POST['date'];
	$qry="SELECT * FROM `tickets` WHERE `from1`='$from' AND `to1`='$to' AND `date`='$date'";
	$run=mysqli_query($con,$qry);
	$res=mysqli_num_rows($run);
	if($res>0)
	{
		for($i=0;$i<$res;$i++)
		{
		$data=mysqli_fetch_assoc($run);
		
		?>
		<div class="result">
		<table>
		<tr>
		<th><?php echo "From";?></th>
		<th><?php echo "To";?></th>
		<th><?php echo "Date";?></th>
		<th><?php echo "Time";?></th>
		<th><?php echo "Price";?></th>
		<th><?php echo "Bus No."?></th>
		<th><?php echo "Booking"?></th>
		</tr>
		<td><?php echo $data['from1'];?></td>
		<td><?php echo $data['to1'];?></td>
		<td><?php echo $data['date'];?></td>
		<td><?php echo $data['time'];?></td>
		<td><?php  echo $data['price'];?></td>
		<td><?php  echo $data['bus_no'];?></td>
		<td><a href="seat.php?bus_no=<?php echo $data['bus_no']?>">Book</a></td>
        </table>
		</div>
		<?php
			}
		$_SESSION['date']=$date;
		$_SESSION['from']=$from;
		$_SESSION['to']=$to;
		$_SESSION['time']=$data['time'];
		$_SESSION['price']=$data['price'];
		$id=$_SESSION['id'];
		}
		if($res==false){
			?>
			<p style="text-align:center; margin-top:100px;font-size:25px;line-height:35px;">Sorry..<br>No buses are Available right now.Please try after some time..<br>Thank you</p>
			<?php
		}
		
	}

?>

	
</div>
</body>
</html>
