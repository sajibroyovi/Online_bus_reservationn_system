<?php
session_start();
	$bus_no=$_SESSION['bus_no'];
	$downloadid=$_GET['id'];
	$userid=$_SESSION['id'];
	$from=$_SESSION['from'];
	$to=$_SESSION['to'];
	$date=$_SESSION['date'];
	$time=$_SESSION['time'];
	$price=$_SESSION['price'];
	require("fpdf/fpdf.php");
class PDF extends FPDF{
	function Header(){
		$this->setFont('Times','B',15);
		$this->Image('logo1.png',0,0,50,20);
		$this->Cell(0,10,"Welcome to Easy Ride",0,1,"C");
	}
	function Footer(){
		$this->setFont('Times','B',15);
		
		$this->Cell(0,10,"Thank You...",0,1,"C");
	}
}
include('dbcon.php');
$pdf = new PDF('P','mm',array(148,160));
$pdf->SetFont("Arial","I","10");
$pdf->SetTextColor(50,150,100);
$pdf->SetFillColor(230,220,220);
if($bus_no)
{
	$sql="select * from `$bus_no` WHERE `id`='$downloadid'";
	$run=mysqli_query($con,$sql);
	$row=mysqli_num_rows($run);
	$res=mysqli_fetch_assoc($run);
	if($res['userid']==$userid)
	{
	$pdf->AddPage();
	$pdf->Image('watermark.png',10,10,150,150);
	$pdf->Cell(60,10,"Name:",1,0,"C");
	$pdf->Cell(60,10,$res['fullname'],1,1,"C");
	
	$pdf->Cell(60,10,"Mobile:",1,0,"C");
	$pdf->Cell(60,10,$res['mobile'],1,1,"C");
	
	$pdf->Cell(60,10,"Age:",1,0,"C");
	$pdf->Cell(60,10,$res['age'],1,1,"C");
	
	$pdf->Cell(60,10,"Gender:",1,0,"C");
	$pdf->Cell(60,10,$res['gender'],1,1,"C");
	
	$pdf->Cell(60,10,"Seat No:",1,0,"C");
	$pdf->Cell(60,10,$res['seat1'],1,1,"C");
	
	$pdf->Cell(60,10,"From:",1,0,"C");
	$pdf->Cell(60,10,$from,1,1,"C");
	
	$pdf->Cell(60,10,"To:",1,0,"C");
	$pdf->Cell(60,10,$to,1,1,"C");
	
	$pdf->Cell(60,10,"Date:",1,0,"C");
	$pdf->Cell(60,10,$date,1,1,"C");
	
	$pdf->Cell(60,10,"Time:",1,0,"C");
	$pdf->Cell(60,10,$time,1,1,"C");
	
	$pdf->Cell(60,10,"Bus No:",1,0,"C");
	$pdf->Cell(60,10,$bus_no,1,1,"C");
	
	$pdf->Cell(60,10,"Price:",1,0,"C");
	$pdf->Cell(60,10,$price,1,1,"C");
	
	}
}
$pdf->Output('ticket.pdf','D');

?>

