<?php
session_start();
$fullname=$_SESSION['fullname'];
$bus_no=$_SESSION['bus_no'];

	$from=$_SESSION['from'];
	$to=$_SESSION['to'];
	$date=$_SESSION['date'];
	$time=$_SESSION['time'];
	$price=$_SESSION['price'];
	$name=$_SESSION['fullname'];
	$mobile=$_SESSION['mobile'];
	$seat=$_SESSION['seat'];
	$age=$_SESSION['age'];
	$gender=$_SESSION['gender'];
require_once __DIR__ . '/vendor/autoload.php';
include('dbcon.php');
$mpdf = new \Mpdf\Mpdf();
if($name)
{
	$sql="select * from `seat`";
	$run=mysqli_query($con,$sql);
	$row=mysqli_num_rows($run);
	for($i=0;$i<=$row;$i++){
	$res=mysqli_fetch_assoc($run);
	if($res['fullname']==$name)
	{
	$data="";
	$data .='<h1><strong>Welcome to Easy Ride</strong></h1>';
	$data .='<h3><strong>Your Ticket Details</strong></h3>';
	$data .='<strong> Name    : </strong>' .$res['fullname'].'<br>';
	$data .='<strong> Mobile  : </strong>' .$res['mobile'].'<br>';
	$data .='<strong> Age     : </strong>' .$res['age'].'<br>';
	$data .='<strong> Gender  : </strong>' .$res['gender'].'<br>';
	$data .='<strong> Seat No : </strong>' .$res['seat1'].'<br>';
	$data .='<strong> From    : </strong>' .$from.'<br>';
	$data .='<strong> To      : </strong>' .$to.'<br>';
	$data .='<strong> Date    : </strong>' .$date.'<br>';
	$data .='<strong> Time    : </strong>' .$time.'<br>';
	$data .='<strong> Price   : </strong>' .$price.'<br>';
	$data .='<strong> Bus No  : </strong>' .$bus_no.'<br>';
	}
	}
}

else
{
	$sql="select * from `seat`";
	$run=mysqli_query($con,$sql);
	$row=mysqli_num_rows($run);
	for($i=0;$i<=$row;$i++){
	$res=mysqli_fetch_assoc($run);
	$data .='<h1><strong>Welcome to Easy Ride</strong></h1>';
	$data .='<h3><strong>Your Ticket Details</strong></h3>';
	$data .='<strong> Name    : </strong>' .$res['fullname'].'<br>';
	$data .='<strong> Mobile  : </strong>' .$res['mobile'].'<br>';
	$data .='<strong> Age     : </strong>' .$res['age'].'<br>';
	$data .='<strong> Gender  : </strong>' .$res['gender'].'<br>';
	$data .='<strong> Seat No : </strong>' .$res['seat1'].'<br>';
	$data .='<strong> From    : </strong>' .$from.'<br>';
	$data .='<strong> To      : </strong>' .$to.'<br>';
	$data .='<strong> Date    : </strong>' .$date.'<br>';
	$data .='<strong> Time    : </strong>' .$time.'<br>';
	$data .='<strong> Price   : </strong>' .$price.'<br>';
	$data .='<strong> Bus No  : </strong>' .$bus_no.'<br>';
	}
}
$mpdf->WriteHTML($data);
$mpdf->Output();

?>