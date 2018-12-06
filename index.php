<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<?php
session_start();

if(isset($_SESSION['sig']))
{
	#If login is true send to this location. Already logged in
	echo("<script>window.loacation='home.php'</script>");
}

if(isset($_REQUEST['submit']))
{
	$email=$_REQUEST["email"];
	$password=$_REQUEST["pass"];

	#include('db_login.php');
	$servername = "localhost";
	$username = "fvres";
	$password = "password";
	$dbname = "fvres";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";

	if(isset($_POST["email"], $_POST["pass"]))
    {
        $email = $_POST["email"];
        $password = $_POST["pass"];

				$sql = "SELECT * FROM accounts WHERE email='" . $email . "' AND password='" . $password ."'";
				$result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0 )
        {
					while($row = mysqli_fetch_assoc($result)) {
            $_SESSION["sig"] = "OK";
            $_SESSION["email"] = $row["email"];
						$_SESSION["id"] = $row["account_id"];
						$_SESSION["account_type"] = $row["account_type"];
						$_SESSION["first_name"] = $row["first_name"];
						$_SESSION["last_name"] = $row["last_name"];
						$_SESSION["company"] = $row["company"];

						if($_SESSION["account_type"] == 0 ){
							echo('<script>window.location="admin_home.php"</script>');
						}
						if($_SESSION["account_type"] == 1 ){
							echo('<script>window.location="realtor_home.php"</script>');
						}
						if($_SESSION["account_type"] == 2 ){
							echo('<script>window.location="installer_home.php"</script>');
						}
					}
        }
        else
        {
            echo('<script>alert("False login credentials");</script>');
						//echo('<script>alert("False login ' . $email . ' credentials");</script>');
        }
		}
		else{
			echo 'The username or password arent set';
			echo $_POST["email"];
			echo $_POST["pass"];
		}
}

?>



<head>
	<title>Fox Valley Real Estate and Signs</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/sign.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="index.php">
					<span class="login100-form-title">
						FVRES Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							<!-- <input type="submit" name="submit" value="Login"> -->Login
						</button>
					</div>

					<!--
					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
				-->
				<!--
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				-->
<input type="hidden" name="submit" value="true">
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
