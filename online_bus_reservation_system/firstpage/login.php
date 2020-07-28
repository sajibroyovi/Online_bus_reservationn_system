<?php
session_start();

	if(isset($_SESSION['name']))
	{
		header('location:../index.php');
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
				<p>Email id</p>
				<input type="email" name="mail" placeholder="Enter Email" required>
				<p>Password</p>
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
	$mail=$_POST['mail'];
	$password=md5($_POST['pass']);
	$qry="SELECT * FROM `user` WHERE `eom`='$mail' AND `npass`='$password'";
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
		$name=$data['fname'];
		$id=$data['id'];
		session_start();
		$_SESSION['name']=$name;
		$_SESSION['id']=$id;
		header('location:../index.php');
	}
}
?>
