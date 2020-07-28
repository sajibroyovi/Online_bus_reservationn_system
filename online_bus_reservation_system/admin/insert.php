<html>
<head>
<title>Insert</title>
<link href="insertstyle.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
	<h1>Wellcome to Admin Deshboard</h1>
	<div class="menu">
		<ul>
			<li><a href="admindash.php">Home</a></li>
			<li><a href="insert.php">Insert</a></li>
			<li><a href="delete.php">Delete</a></li>
			<li><a href="#">Update</a></li>
		</ul>
	</div>
	<div class="logo">
		<a href="logout.php"><img src="../logo/logo2.png"></a>
		<p class="logout">Log Out</p>
	</div>
</header>
<div class="back">
	<form method="post" action="insert.php" enctype="multipart/form-data">
		<div class="insert">
			From<br>
			<input type="text" class="input" name="from" required><br>
			To<br>
			<input type="text"class="input" name="to" required><br>
			Date<br>
			<input type="date"class="input" name="date" required><br>
			Time<br>
			<input type="time"class="input" name="time" required><br>
			Price<br>
			<input type="text"class="input" name="price" required><br>
			Bus Number<br>
			<input type="text" class="input" name="bus_no" required><br>
			<div class="submit" name="submit">
				<button name="submit">Submit</button>
			</div>
		</div>
	</form>
</div>
</body>

</html>
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$from=$_POST['from'];
	$to=$_POST['to'];
	$data=$_POST['date'];
	$time=$_POST['time'];
	$price=$_POST['price'];
	$bus_no=$_POST['bus_no'];
	$qry="INSERT INTO `tickets`(`from1`, `to1`, `date`, `time`, `price`,`bus_no`) VALUES ('$from','$to','$data','$time','$price','$bus_no')";
	$run=mysqli_query($con,$qry);
	
	if($run==true)
	{
		?>
		<script>
			alert('Data Inserded Successfully...');
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
