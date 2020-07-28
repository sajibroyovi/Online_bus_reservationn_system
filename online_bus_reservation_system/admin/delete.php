<html>
<head>
<title>Delete</title>
<link href="deletestyle.css" type="text/css" rel="stylesheet">
</head>
<body>
<nav>
<h1>Wellcome to Admin Deshboard</h1>

<div class="list">
<ul>
<li><a href="admindash.php">Home</a></li>
<li><a href="insert.php">Insert</a></li>
<li><a href="delete.php">Delete</a></li>
<li><a href="#">Update</a></li>

</ul>
</div>
<div class="logout">
	<a href="logout.php"><img src="../logo/logo2.png">
	<p class="logout">Log Out</p>
	</a>
	</div>
</nav>
<div>
<form action="delete.php" method="post">

<div class="box">
Enter the bus number:<br>
<input type="text" class="input" name="number" ><br>
Enter the date:<br>
<input type="date"class="input" name="date">
<div class="submit">
<button name="submit">Search</button>
</div>
</div>

</form>
</div>
<div class="view">
<?php
include('../dbcon.php');

if(isset($_POST['submit'])){
	$number=$_POST['number'];
	$date=$_POST['date'];
	$sql="SELECT * FROM `tickets` WHERE `bus_no`='$number'AND`date`='$date'";
	$run=mysqli_query($con,$sql);
	$res=mysqli_num_rows($run);
	
if($res==True){
	
	for($i=1;$i<=$res;$i++){
	$data=mysqli_fetch_assoc($run);
	?>
	<div class="result">
		<table>
		<tr>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "From";?></th>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "To";?></th>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "Date";?></th>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "Time";?></th>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "Price";?></th>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "Bus No."?></th>
	
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "Delete"?></th>
		</tr>
		<tr>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;"><?php echo $data['from1'];?></td>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;"><?php echo $data['to1'];?></td>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;"><?php echo $data['date'];?></td>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;"><?php echo $data['time'];?></td>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;"><?php  echo $data['price'];?></td>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;"><?php  echo $data['bus_no'];?></td>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;">
		<a href="deleteform.php?sid=<?php  echo $data['id'];?>">Delete
		</a>
		</td>
		</tr>                 
		
        </table>
		</div>
		<?php
	}
	
	
}
}
else{
	?>
	<script>
	alert('No record found');
	</script>
	<?php
}
?>
</div>
</body>
</html>
