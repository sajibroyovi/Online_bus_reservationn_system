<?php

include('../dbcon.php');
   $id=$_REQUEST['sid'];
	$qry="DELETE FROM `tickets` WHERE `id`='$id'";
	
	$run=mysqli_query($con,$qry);
	
	if($run==true)
	{
		?>
		<script>
			alert('Delete Successfull...');
			window.open('viewall.php?sid=<?php echo $id;?>','_self');
		</script>
		<?php
	}	 
?>