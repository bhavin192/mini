<?php
if(isset($_POST["submit"])) {
	session_start();
	if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
		$_SESSION['uname'] = $_POST['username'];
		header("location:dashboard.php");
	}
}
?>

<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="css/custom.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


</head>


<body>
<form role="form" action="" method="post" enctype="multipart/form-data" class="text-center">
	<div class="form-group">
		<label for="username">Username:</label>
		<p><input type="text" class="form-control" placeholder="Enter username" name="username" required></p> 
	</div>
	<div class="form-group">
		<label for="password">Password:</label>
		<p><input type="password" class="form-control" placeholder="Enter password" name="password" required></p> 
	</div>	
	<input type="submit" name="submit" value="Login" class="btn  btn-default">
</form>




</body>
</html>