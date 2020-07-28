<html>
<head>
<title>Create new account</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form action="create_account.php" method="post" enctype="multipart/form-data">
<div class="create-account">
        <h1>Create a new account</h1>
          <h4>It's quick and easy.</h4>
		<input type=text placeholder="First name" class="fname" name="fname" required> 
		<input type=text placeholder="Surname" class="sname" name="sname" required><br>
		<input type=email placeholder="Email address" class="mno" name="eop" required><br>
		<input type=Password placeholder="New password" class="npass" name="pass" required>
<h4>Birthday</h4>
<span>
	<select aria-label="Day" name="birth_day" title="Day" required>
				<option value="0">Day</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4" selected="1">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="16">15</option>
				<option value="17">17</option>
				<option value="19">18</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
</select>
<select aria-label="Month" name="birth_month" title="Month" required>
			<option value="1">Jan</option>
			<option value="2">Feb</option>
			<option value="3">Mar</option>
			<option value="4">Apr</option>
			<option value="5" selected="1">May</option>
			<option value="6">Jun</option>
			<option value="7">Jul</option>
			<option value="8">Aug</option>
			<option value="9">Sep</option>
			<option value="10">Oct</option>
			<option value="11">Nov</option>
			<option value="12">Dec</option>
</select>
<select aria-label="Year" name="birth_year" title="Year" required>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
			<option value="1999">1999</option>
			<option value="1998">1998</option>
			<option value="1997">1997</option>
			<option value="1996">1996</option>
			<option value="1995">1995</option>
			<option value="1994" selected="1">1994</option>
			<option value="1993">1993</option>
		</select>
	</span>
	<h4>Gender</h4>
 <h3>
 <input type=radio name=a value="Female" required>Female
 <input type=radio name=a value="Male" required>Male
 <input type=radio name=a value="Coustom" required>Coustom</h3>
 <h5>By clicking Sign Up, you agree to our<a href="#"> Terms, Data Policy</a> and<a href="#"> Cookie Policy.</a> You may receive SMS notifications from us and can opt out at any time.
</h5>
<div class="sup">
<input type="submit" value="Sign Up" name="submit">
</div>
</div>
</form>
</body>
</html>
<?php
include('../dbcon.php');

if(isset($_POST['submit'])){
	$first_name=$_POST['fname'];
	$sur_name=$_POST['sname'];
	$email_or_phone=$_POST['eop'];
	$pass=$_POST['pass'];
	$password=md5($pass);
	$birthday=$_POST['birth_day'];
	$birth_month=$_POST['birth_month'];
	$birth_year=$_POST['birth_year'];
	$gender=$_POST['a'];
	
	$sql="INSERT INTO `user` (`fname`, `sname`, `eom`, `npass`, `bday`, `bmonth`, `byear`, `gender`) VALUES ('$first_name','$sur_name','$email_or_phone','$password','$birthday','$birth_month','$birth_year','$gender')";
	$run=mysqli_query($con,$sql);
	if($run==true)
	{
		?>
		<script>
			alert('Registration Success...');
			window.location.replace("login.php");
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