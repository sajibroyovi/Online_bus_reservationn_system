<!DOCTYPE html>
<html lang="en">
<head>
<link href="buttonstyle.css" rel="stylesheet" type="text/css">
</head>
<body>

	<div class="wrapper">
	<?php
	include ('dbcon.php');
	
	for($i=1;$i<=9;$i++)
	{
	?>
	<div>
		<?php ?>A<?php echo $i?>
			<?php
			$seat="A".$i;
			
			$selsql="SELECT * FROM `hall`";
			
			$result=mysqli_query($con,$selsql);
			$res=mysqli_fetch_assoc($result);
			if($res['seatnumber']=="notbooked")
				{ ?>
			<label class="main"><input type="checkbox" name="check_list[]" value="<?php ?>A<?php echo $i?>"/><span class="geekmark"><img src="logo/seat.png" height="30em"></span></label>
				
				<?php
				}
				else{ ?>
				<label class="main"><input type="checkbox" onclick="sendData()"/><span class="geekmark1"><img src="logo/red2.png" height="30em"></span></label>
				<?php
				}
				?>
				
		
		
	</div>
	<?php 
	}
	?>
	
<?php
	for($i=1;$i<=9;$i++)
	{
	?>
	<div>
		<?php ?>B<?php echo $i?>
			<?php
			$seat="B".$i;
			$selsql="SELECT * FROM `hall`";
			$result=mysqli_query($con,$selsql);
			$res=mysqli_fetch_assoc($result);
			if($res['seatnumber']=="notbooked")
				{ ?>
			<label class="main"><input type="checkbox" name="check_list[]" value="<?php ?>A<?php echo $i?>"/><span class="geekmark"><img src="logo/seat.png" height="30em"></span></label>
				
				<?php
				}
				else{ ?>
				<label class="main"><input type="checkbox" onclick="sendData()"/><span class="geekmark1"><img src="logo/red2.png" height="30em"></span></label>
				<?php
				}
				?>
		
	</div>
	<?php
	}
	?>
	<?php
	for($i=1;$i<=9;$i++)
	{
	?>
	<div>
		<?php ?>C<?php echo $i?>
			<?php
			$seat="C".$i;
			$selsql="SELECT * FROM `hall`";
			$result=mysqli_query($con,$selsql);
			$res=mysqli_fetch_assoc($result);
			if($res['seatnumber']=="notbooked")
			{ ?>
			<label class="main"><input type="checkbox" name="check_list[]" value="<?php ?>A<?php echo $i?>"/><span class="geekmark"><img src="logo/seat.png" height="30em"></span></label>
				
				<?php
				}
				else{ ?>
				<label class="main"><input type="checkbox" onclick="sendData()"/><span class="geekmark1"><img src="logo/red2.png" height="30em"></span></label>
				<?php
				}
				?>
		
	</div>
	<?php
	}
	?>
	
</div>
<?php
function sendData(){
	alert('Alredy booked');
}
?>

</body>
</html> 