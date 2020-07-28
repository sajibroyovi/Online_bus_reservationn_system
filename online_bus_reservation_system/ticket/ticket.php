
<?php
$fullname=$_SESSION['fullname'];
include('dbcon.php');
$handel = fopen("test.txt","w");
$qry1="SELECT * FROM seat WHERE `fullname`='$fullname'";
$run1=mysqli_query($con,$qry1);
$row2=mysqli_num_rows($run1);
if($row2>0){
	for($i=0;$i<$row2;$i++)
	{
			$data=mysqli_fetch_assoc($run1);		
			 fwrite($handel,"Name:");fwrite($handel, $data['fullname']);fwrite($handel,"\n");
			 #fwrite($handel,"Email:");fwrite($handel, $data['email']);fwrite($handel,"\n");
			 fwrite($handel,"Phone:"); fwrite($handel, $data['mobile']);fwrite($handel,"\n");
			 fwrite($handel,"Gender:"); fwrite($handel, $data['gender']);fwrite($handel,"\n");
			 fwrite($handel,"Seat_number:");fwrite($handel, $data['seat1']);fwrite($handel,"\n");
			                                                                          
			
			
		}
	fwrite($handel,"\n\n\n");
	fclose($handel);
}
?>




