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
	
	$from=$_SESSION['from'];
	$to=$_SESSION['to'];
	$date=$_SESSION['date'];
	$time=$_SESSION['time'];
	$price=$_SESSION['price'];
	$_SESSION['bus_no']= $_GET['bus_no'];
	$id=$_SESSION['id'];
	?>
	
	
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="seat.css" rel="stylesheet" type="text/css">
<link rel="icon" type="PNG/img" href="logo/Sajb2.jpg" >
</head>
<body>
<form action="seat.php?bus_no=<?php echo $_GET['bus_no']?>" method="POST" enctype="multipart/form-data">
<nav>
	<label class="logo">Easy Ride</label>
	<div class="list">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="#">About Us</a></li>
		<li><a href="#">Services</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="feedback/feedback.php">Feedback</a></li>
		<div class="sublist">
		<li><a href="#">Manage Booking</a>
		<div class="submenu">	
		
		<a href="#">Reschedule</a>
		<a href="viewticket.php">Show My Ticket</a>
		<a href="#">Email/SMS</a>
		<a href="#">Cancel</a>
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
<label style="margin-top:50px; margin-left:150px; background-color:#FFF;font-weight:bold; font-size:20px; cursor:pointer; ">
	<a href="showdetails.php">Back</a>
</label>
<div class="input_box">
	<b>Full name</b><br>
	<input type="text" name="fname" placeholder="Full name" required style="width:240px; height:35px;"><br><br>
	<b>Mobile Number</b><br>
	<input type="text" name="mobile" placeholder="Mobile Number" required style="width:240px; height:35px"><br><br>
	<b> Age</b><br>
	 <input type="text" name="age" placeholder="Age" required style="width:240px; height:35px"><br><br>
	<b> Gender</b><br>
	 <label style="margin:5px auto; cursor:pointer"><input type="radio" name="gender" value="Female" required>Female</label>
	 <label  style="margin:5px auto; cursor:pointer"><input type="radio" name="gender" value="Male" required>Male</label>
	 <label style="margin:5px auto; cursor:pointer"><input type="radio" name="gender" value="Coustom" required>Coustom</label>
</div>
<div class="plane">
  <div class="cockpit">
    <h2>Please select a seat</h2>
  </div>
  <div class="exit exit--front fuselage">
   </div>
  <ol class="cabin fuselage">
      <ol class="seats">
	  <?php
	  $bus_no=$_GET['bus_no'];
	  include('dbcon.php');
	  $sql="SELECT * FROM `$bus_no`";
	  $result=mysqli_query($con,$sql);
	  $res1=mysqli_fetch_assoc($result);
	  if(empty($res1['status']))
	  {
		  ?>
        <li class="seat">
          <input type="checkbox" id="1A" name="check" value="A1"/>
          <label for="1A">A1</label>
        </li>
	  <?php
	  }
	  else{
		  ?>
		  <li class="seat">
          <input type="checkbox" disabled id="1A"  />
          <label for="1A" title="Already Booked">A1</label>
        </li>
		<?php
	  }
	  
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
			?>
        <li class="seat">
          <input type="checkbox" id="A2" name="check" value="A2"/>
          <label for="A2">A2</label>
        </li>
		<?php
		}
		else{
			?>
			 <li class="seat">
          <input type="checkbox" disabled id="A2"  />
          <label for="A2" title="Already Booked">A2</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
			?>
        <li class="seat">
          <input type="checkbox" id="A3" name="check" value="A3" />
          <label for="A3">A3</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="A3"  />
          <label for="A3" title="Already Booked">A3</label>
        </li>
		<?php
		}
		?>
      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats">
	  <?php
	  $res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
			?>
        <li class="seat">
          <input type="checkbox" id="B1" name="check" value="B1"/>
          <label for="B1">B1</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="B1"  />
          <label for="B1" title="Already Booked">B1</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
			?>
        <li class="seat">
          <input type="checkbox" id="B2" name="check" value="B2"/>
          <label for="B2" >B2</label>
        </li>
		<?php
		}
		else{
			?>
		<li class="seat">
          <input type="checkbox" disabled id="B2"  />
          <label for="B2" title="Already Booked">B2</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
			?>
        <li class="seat">
          <input type="checkbox" id="B3" name="check" value="B3"/>
          <label for="B3">B3</label>
        </li>
		<?php
		}
		else{
			?>
		<li class="seat">
          <input type="checkbox" disabled id="B3"  />
          <label for="B3" title="Already Booked">B3</label>
        </li>
			<?php
		}
		?>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats">
	  <?php
	  $res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
			?>
        <li class="seat">
          <input type="checkbox" id="C1" name="check" value="C1" />
          <label for="C1">C1</label>
        </li>
		<?php
		}
		else{
			?>
		<li class="seat">
          <input type="checkbox" disabled id="C1"  />
          <label for="C1" title="Already Booked">C1</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
			?>
        <li class="seat">
          <input type="checkbox" id="C2" name="check" value="C2"/>
          <label for="C2">C2</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox"  disabled id="C2"  />
          <label for="C2" title="Already Booked">C2</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
			?>
        <li class="seat">
          <input type="checkbox" id="C3" name="check" value="C3"/>
          <label for="C3">C3</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="C3"  />
          <label for="C3" title="Already Booked">C3</label>
        </li>
		<?php
		}
		?>
      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats">
	  <?php
	  $res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
			?>
        <li class="seat">
          <input type="checkbox" id="D1" name="check" value="D1" />
          <label for="D1">D1</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="D1"  />
          <label for="D1" title="Already Booked">D1</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
			?>
        <li class="seat">
          <input type="checkbox" id="D2" name="check" value="D2"/>
          <label for="D2">D2</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="D2"  />
          <label for="D2" title="Already Booked">D2</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
			?>
        <li class="seat">
          <input type="checkbox" id="D3" name="check" value="D3"/>
          <label for="D3">D3</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="D3"  />
          <label for="D3" title="Already Booked">D3</label>
        </li>
		<?php
		}
		?>
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats">
	  <?php
	  $res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
			?>
        <li class="seat">
          <input type="checkbox" id="E1" name="check" value="E1"/>
          <label for="E1">E1</label>
        </li>
		<?php
		}
		else{
		?>
		<li class="seat">
          <input type="checkbox" disabled id="E1"  />
          <label for="E1"title="Already Booked">E1</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
		?>
        <li class="seat">
          <input type="checkbox" id="E2" name="check" value="E2"/>
          <label for="E2">E2</label>
        </li>
		<?php
		}
		else{
		?>
		<li class="seat">
          <input type="checkbox" disabled id="E2"  />
          <label for="E2" title="Already Booked">E2</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
		?>
        <li class="seat">
          <input type="checkbox"id="E3" name="check" value="E3" />
          <label for="E3">E3</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="E3"  />
          <label for="E3" title="Already Booked">E3</label>
        </li>
		<?php
		}
		?>
      </ol>
    </li>
    <li class="row row--6">
      <ol class="seats">
	  <?php
	  $res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
		?>
        <li class="seat">
          <input type="checkbox" id="F1" name="check" value="F1"/>
          <label for="F1">F1</label>
        </li>
		<?php
		}
		else{
		?>
		<li class="seat">
          <input type="checkbox" disabled id="F1"  />
          <label for="F1"title="Already Booked">F1</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
		?>
        <li class="seat">
          <input type="checkbox" id="F2" name="check" value="F2" />
          <label for="F2">F2</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="F2"  />
          <label for="F2"title="Already Booked">F2</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
		?>
        <li class="seat">
          <input type="checkbox"id="F3" name="check" value="F3"/>
          <label for="F3">F3</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="F3"  />
          <label for="F3"title="Already Booked">F3</label>
        </li>
		<?php
		}
		?>
      </ol>
    </li>
    <li class="row row--7">
      <ol class="seats" >
	  <?php
	  $res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
		?>
        <li class="seat">
          <input type="checkbox"id="G1" name="check" value="G1"/>
          <label for="G1">G1</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="G1"  />
          <label for="G1"title="Already Booked">G1</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
		?>
        <li class="seat">
          <input type="checkbox" id="G2" name="check" value="G2"/>
          <label for="G2">G2</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="G2"   />
          <label for="G2"title="Already Booked">G2</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
			?>
        <li class="seat">
          <input type="checkbox" id="G3" name="check" value="G3"/>
          <label for="G3">G3</label>
        </li>
		<?php
		}
		else{
		?>
		<li class="seat">
          <input type="checkbox" disabled id="G3"  />
          <label for="G3"title="Already Booked">G3</label>
        </li>
		<?php
		}
		?>
      </ol>
    </li>
	<li class="row row--8">
      <ol class="seats" >
	  <?php	  
	  $res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
		?>
        <li class="seat">
          <input type="checkbox"id="H1" name="check" value="H1"/>
          <label for="H1">H1</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="H1"  />
          <label for="H1"title="Already Booked">H1</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
		?>
        <li class="seat">
          <input type="checkbox"id="H2" name="check" value="H2"/>
          <label for="H2">H2</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="H2"  />
          <label for="H2"title="Already Booked">H2</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
		?>
        <li class="seat">
          <input type="checkbox" id="H3" name="check" value="H3"/>
          <label for="H3">H3</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="H3"  />
          <label for="H3"title="Already Booked">H3</label>
        </li>
		<?php
		}
		?>
      </ol>
    </li>
	<li class="row row--9">
      <ol class="seats" >
	  <?php
	  $res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
		?>
        <li class="seat">
          <input type="checkbox" id="I1" name="check" value="I1"/>
          <label for="I1">I1</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="I1"  />
          <label for="I1"title="Already Booked">I1</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
		?>
        <li class="seat">
          <input type="checkbox" id="I2" name="check" value="I2"/>
          <label for="I2">I2</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="I2"  />
          <label for="I2"title="Already Booked">I2</label>
        </li>
		<?php
		}
		?>
		<?php
		$res1=mysqli_fetch_assoc($result);
		if(empty($res1['status'])){
		?>
        <li class="seat">
          <input type="checkbox" id="I3" name="check" value="I3"/>
          <label for="I3">I3</label>
        </li>
		<?php
		}
		else{
			?>
			<li class="seat">
          <input type="checkbox" disabled id="I3"  />
          <label for="I3"title="Already Booked">I3</label>
        </li>
		<?php
		}
		?>
      </ol>
    </li>
  </ol>
  <div class="submit">
<input type="submit" value="Book" name="submit">
</div>

</form>
</div>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$mobile=$_POST['mobile'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$seat=$_POST['check'];
	$status="Booked";
	$sql="UPDATE `$bus_no` SET `fullname`='$fname',`mobile`='$mobile',`age`='$age',`gender`='$gender',`seat1`='$seat',`status`='$status',`userid`='$id' WHERE `seat1`='$seat'";
	$run=mysqli_query($con,$sql);
	if($run==true)
	{
		?>
		<script>
		alert('success');		
		
		</script>
		
		
	<?php	
	}
	else
	{
	?>
	<script>
		alert('error');
		</script>
	<?php
	}

;
}

?>