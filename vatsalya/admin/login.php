<html>
<?php
session_start();
include("../connection.php");
$msg = "";
if(isset($_POST) && $_SESSION['msg-digest']!= $_POST['msg-digest']){
	$_SESSION['msg-digest'] = $_POST['msg-digest'];
$loginQry = "SELECT * FROM login where username='".$_POST['uname']."' and  password='".$_POST['upassword']."' limit 1";
$result = mysql_query($loginQry,$res);
while($user = mysql_fetch_assoc($result))
{
  $_SESSION['userid'] = $user['id'];
  $_SESSION['username'] = $user['username'];

}
//print_r($a);
if (mysql_num_rows($result) >0){
   header ('location: pages.php');
} else {
    $msg = "Please enter correct Username and Password";
}
}
   
?>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="icon" type="logo/png" sizes="16x16" href="images/logo.png">
    <title>Vatsalya Trust</title>
<style>


input, select {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>
<title> login page</title>
</head>
<body>
<!---<div class="rows" style="width: 487px;height: 522px;margin-left: 29%;background: #add8e6;">
<div align="center"><h1> WELCOME TO VATSALYA TRUST</h1></div>
<div align="center">
<div class="form-post">
/*
</div>
<form method="POST" name="submit" action="login.php">
<input type="hidden" name="msg-digest" value ="<?php echo rand(); ?>">
<label for="uname" style="margin-right: 61%;">Username:</label><br>
<input type="text" name="uname" placeholder="Enter Your User Name"><br><br>
<label for="upassword" style="margin-right: 61%;">Password:</label><br>
<input type="password" name="upassword" placeholder="Enter Your Password"><br>
<br><br><br><br>
<input type="submit" value="Login" name="submit">
</div>
</div>
</form><br><br>----->

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
			<div class="form-post">
<?php echo $msg; ?>
</div>
				<form class="login100-form validate-form" method="POST" name="submit" action="login.php">
				<input type="hidden" name="msg-digest" value ="<?php echo rand(); ?>">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="uname" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="upassword" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
