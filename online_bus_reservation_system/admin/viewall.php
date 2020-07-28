<head>
<title>View All Ticket</title>
<link href="viewstyle.css" rel="stylesheet" type="text/css">
</head>
<?php
include('../dbcon.php');
$sql="SELECT * FROM `tickets`";
$run=mysqli_query($con,$sql);
$res=mysqli_num_rows($run);

if($res==True){
	
	?>
	<div class="heading">
	<table>
	
	<tr>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "From";?></th>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "To";?></th>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "Date";?></th>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "Time";?></th>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "Price";?></th>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "Bus No."?></th>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "Edit"?></th>
		<th style="width:100px font-size=20px;text-decoration:underline"><?php echo "Delete"?></th>
		</tr>
	</table>
	</div>
		<?php
	for($i=1;$i<=$res;$i++){
	$data=mysqli_fetch_assoc($run);
	?>
	<div class="result">
		<table>
		<tr>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;"><?php echo $data['from1'];?></td>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;"><?php echo $data['to1'];?></td>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;"><?php echo $data['date'];?></td>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;"><?php echo $data['time'];?></td>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;"><?php  echo $data['price'];?></td>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;"><?php  echo $data['bus_no'];?></td>
		<td style="text-align:left;width:100px;font-size:20px;text-align: center;"><a href="#">Edit</a></td>
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

else{
	?>
	<script>
	alert('No record found');
	</script>
	<?php
}

?>