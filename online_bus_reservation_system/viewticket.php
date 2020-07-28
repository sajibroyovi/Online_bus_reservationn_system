<?php
session_start();

	if(isset($_SESSION['name']))
	{

	}
	else
	{
		//echo "error.....";
		header('location:firstpage/login.php');
	}
    $bus_no=$_SESSION['bus_no'];
	$from=$_SESSION['from'];
	$to=$_SESSION['to'];
	$date=$_SESSION['date'];
	$time=$_SESSION['time'];
	$price=$_SESSION['price'];
	$id=$_SESSION['id'];
	
?>
<html>
<head>
<title>View Ticket</title>
<link href="showdetails.css" type="text/css" rel="stylesheet">
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
		<a href="viewticket.php">Show My Ticket</a>
		<a href="#">Email/SMS</a>
		<a href="cancle.php">Cancel</a>
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
<label style="margin-top:50px; margin-left:150px; background-color:#FFF;font-weight:bold; font-size:20px; cursor:pointer;"><a href="seat.php?bus_no=<?php echo $bus_no;?>">Back</a></label>
<div class="details">

<?php
	#$key=$_SESSION['fullname'];
	include ('dbcon.php');
	$qry="SELECT * FROM `$bus_no`";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
		if($row>0)
		{	for($i=1;$i<=$row;$i++){		
			$data=mysqli_fetch_assoc($run);
			if($data['userid']==$id)
			{
				?>
				<div class="result">
				<table>
				<tr>
				<th><?php echo "Name";?></th>
				<th><?php echo "Phone";?></th>
				<th><?php echo "Seat Number";?></th>
				<th><?php echo "Age";?></th>
				<th><?php echo "Gender";?></th>
				<th><?php echo "From";?></th>
				<th><?php echo "To";?></th>
				<th><?php echo "Date";?></th>
				<th><?php echo "Time";?></th>
				<th><?php echo "Bus No";?></th>
				<th><?php echo "Price";?></th>
				</tr>
				<td><?php echo $data['fullname'];?></td>
				<td><?php echo $data['mobile'];?></td>
				<td><?php echo $data['seat1'];?></td>
				<td><?php echo $data['age'];?></td>
				<td><?php echo $data['gender'];?></td>
				<td><?php echo $from;?></td>
				<td><?php echo $to;?></td>
				<td><?php echo $date;?></td>
				<td><?php echo $time;?></td>
				<td><?php echo $bus_no;?></td>
				<td><?php echo $price;?></td>
				
				</table>
				<button style="width:120px;height:40px;margin-top:5px;background-color:#1168f2;"><a href="ticket/newpdf.php?id=<?php echo $data['id'];?>" style="text-decoration:none;padding:8px 10px;font-size:18px;">Download</a></button>
				</div>
				<?php
			}
			
		}
	}		 
?>
				
</div>
</body>
</html>
