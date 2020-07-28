<?php
session_start();
	$bus_no=$_SESSION['bus_no'];
	$cancle=$_GET['id'];
	$userid=$_SESSION['id'];
	$from=$_SESSION['from'];
	$to=$_SESSION['to'];
	$date=$_SESSION['date'];
	$time=$_SESSION['time'];
	$price=$_SESSION['price'];

include('dbcon.php');
if($bus_no)
{
	$sql="select * from `$bus_no` WHERE `id`='$cancle'";
	$run=mysqli_query($con,$sql);
	$row=mysqli_num_rows($run);
	$res=mysqli_fetch_assoc($run);
	$can="Cancle";
	$seat=$res['seat1'];
	if($res['userid']==$userid){
		#$qry="DELETE FROM `$bus_no` WHERE `id`='$cancle'";
		$qry="UPDATE `$bus_no` set `fullname`=' ',`mobile`=' ',`age`=' ',`gender`=' ',`status`='',`userid`='23' where `id`='$cancle'";
		$run1=mysqli_query($con,$qry);
		if($run1){
			?>
			<script>
			alert('Sucess');
			window.open('cancle.php','_parent');
			</script>
			<?php
		}
		else{
			?>
			<script>
			alert('Error');
			window.open('cancle.php','_parent');
			</script>
			<?php
			
		}
	}
}	
?>