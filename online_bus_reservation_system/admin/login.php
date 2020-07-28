<?php
session_start();

	if(isset($_SESSION['uid']))
	{
		header('location:admindash.php');
	}
?>

<html>
<head>
<title>log in page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="PNG/img" href="../logo/Sajb2.jpg" >
</head>
<body>
		<div class="loginbox">
		<img src="../logo/logo2.png" class="logo">
		<h1>Login Here</h1>
			<form method="post" action="login.php">
				<p>Enter your Admin ID</p>
				<input type="text" name="admin" placeholder="Enter admin ID" required>
				<p>Enter your Password</p>
				<input type="password" name="pass" placeholder="Enter password" required>
				<input type="submit" name="login" value="login">
				<a href="#">Lost your password?</a></br></br>
				<a href="create_account.php">Don't have an account?</a>
			</form>
		</div>
</body>
</html>
<?php
include ('../dbcon.php');
if(isset($_POST['login']))
{
	$admin=$_POST['admin'];
	$password=$_POST['pass'];
	$qry="SELECT * FROM `admin` WHERE `username`='$admin' AND `password`='$password'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if($row <1)
	{
		?>
		
		<script>
		alert('Username or Password not match!!');
		window.open('login.php','_self');
		</script>
		<?php
	}
	else
	{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		session_start();
		$_SESSION['uid']=$id;
		header('location:admindash.php');
	}
}
?>
