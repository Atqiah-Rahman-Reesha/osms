<?php
include ('../dbConnection.php');
session_start();
if (!isset($_SESSION['is_login'])) {

if (isset($_REQUEST['rEmail'])) {

$rEmail = mysqli_real_escape_string($conn, trim($_REQUEST['rEmail']));
$rPassword = mysqli_real_escape_string($conn, trim($_REQUEST['rPassword']));
$sql = "SELECT r_email, r_password FROM requesterlogin_tb WHERE r_email = '".$rEmail."' AND r_password = '".$rPassword."' limit 1";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
  $_SESSION['is_login'] = true;
  $_SESSION['rEmail'] = $rEmail;
echo "<script> location.href='requesterprofile.php';</script>";
exit;
} else {
	
	$msg = '<div class="alert alert-warning mt-2">Enter Valid Email and Password</div>';
}
}
} else {
	echo "<script> location.href='requesterprofile.php';</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

<!-- FontAwesome CSS -->
<link rel="stylesheet" type="text/css" href="../css/all.min.css">


<style>
	.custom-margin{
		margin-top: 8vh;
	}
</style>
<style>
	.shadow{
		border: 1px solid;
        padding: 10px;
        box-shadow: 5px 10px 8px 10px #888888;
	}
</style>


	<title>Login</title>
</head>
<body>
	<div class="mb-3 mt-5 text-center" style="font-size: 30px;"><i class="fas fa-stethoscope"></i>
		<span>Online Service Management System</span> 
	</div>
	<p class="text-center" style="font-size: 20px;"><i class="fas fa-user-secret text-success"></i> Requester Area </p>
	<div class="container-fluid">
	<div class="row justify-content-center custom-margin">
	<div class="col-sm-6 col-md-4">

	<form action="" class="shadow" method="POST">
		<div class="form-group">
			<i class="fas fa-user"></i><lebel for="email" class="font-weight-bold pl-2">Email</lebel><input type="email" class="form-control" placeholder="Email" name="rEmail">
			<small class="form-text">We'll never share your email with anyone else.</small>	
		</div>
		<div class="form-group">
		<i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">Password</label><input type="password" class="form-control" placeholder="Password" name="rPassword">
		</div>
		<button type="submit" class="btn btn-outline-success mt-4 font-weight-bold btn-block shadow-sm">Login</button>
		<?php if (isset($msg)) {echo $msg;}?>
	</form>
	<div class="text-center"><a href="../index.php" class="btn-info font-weight-bold shadow-sm">Back to Home</a>	
	</div>
</div>
</div>
</div>




<!-- JavaScript Files -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/all.min.js"></script>
</body>
</html>