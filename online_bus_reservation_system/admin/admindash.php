<?php
session_start();

	if(isset($_SESSION['uid']))
	{
		//echo $_SESSION['uid'];
	}
	else
	{
		//echo "error.....";
		header('location:login.php');
	}
?>
<html>
<head>
<title>Admin deshboard</title>
<link href="deshstyle.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
	<h1>Wellcome to Admin Deshboard</h1>
	<div class="menu">
		<ul>
			<li><a href="admindash.php">Home</a></li>
			<li><a href="insert.php">Insert</a></li>
			<li><a href="delete.php">Delete</a></li>
			<li><a href="#">Update</a></li>

		</ul>
	</div>
	<div class="logo">
	<a href="logout.php"><img src="../logo/logo2.png"></a>
	<p>Log out</p>
	</div>

</header>
<div class="back">
	<div class="choice">
		<a href="insert.php"><button>Insert</button></a><br><br><br>
		<a href="delete.php"><button>Delete</button></a><br><br><br>
		<button>Update</button><br><br><br>
		<a href="viewall.php"><button>Manage tickets</button><br><br><br></a>
	</div>
</div>
</body>
</html>