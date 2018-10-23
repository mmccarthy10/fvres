<!DOCTYPE html>
<html lang="en">

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
	#echo($email);
	#echo($password);
	#exit();

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
	#-----------------
	if(isset($_POST["email"], $_POST["pass"]))
    {

        $email = $_POST["email"];
        $password = $_POST["pass"];
				echo($email);
				echo($password);


				$sql = "SELECT account_id FROM accounts WHERE email='" . $email . "'";
				echo($sql);
				$data = mysqli_query($conn, $sql);
				echo($data);
				$result1 = mysqli_fetch_assoc($data);
				#echo(isset($result1));
				exit();

        if(mysql_num_rows($result1) > 0 )
        {
            $_SESSION["sig"] = "OK";
            $_SESSION["email"] = $email;
						$_SESSION["id"] = $esult1['account_id'];
						echo('<script>window.location="home.php"</script>');
        }
        else
        {
            echo('<script>alert("False login credentials");</script>');
        }
		}
		else{
			echo 'The username or password arent set';
			echo $_POST["email"];
			echo $_POST["pass"];
		}
}
	#-----------------
	// $sql = "SELECT * FROM accounts WHERE email='" . $email . "' AND password='" . $password ."'";
	// $result = mysqli_query($conn, $sql);
	//
	// if (mysqli_num_rows($result) > 0) {
	//     // output data of each row
	//     while($row = mysqli_fetch_assoc($result)) {
	// echo "<tr>\n<td>" .
	// $row["account_id"] . "</td>\n<td>" .
	// $row["accountname"] . "</td>\n<td>" .
	// $row["first_name"] . "</td>\n<td>" .
	// $row["last_name"] . "</td>\n<td>" .
	// $row["company"] . "</td>\n<td>" .
	// $row["email"] . "</td>\n<td>" .
	// $row["account_type"] . "</td>\n<td>" .
	// $row["zipcode"] . "</td>\n<td>" .
	// $row["cellnumber"] . "</td>\n<td>" .
	// $row["homenumber"] . "</td>\n<td>" .
	// $row["banknumber"] . "</td>\n<td>" .
	// $row["routingnumber"] . "</td>\n<td>
	// <a href='./test.php?del=" . $row["account_id"] . "'>x</a></td>\n</tr>\n";
	//     }
	// } else {
	//     echo "0 results";
	// }
//
// 	mysqli_close($conn);
// 	#$query="SELECT * FROM accounts";
// 	#$row=mysql_query($query);
// 	#print_r($row);
// 	exit();
//
// 	if(empty($row))
// 	{
// 		#login credentials are wrong / dont exist
// 		echo('<script>alert('.$row.');</script>');
// 		echo('<script>alert("False login credentials");</script>');
// 	}
// 	else
// 	{
// 			#exists and login is good
// 			#$query2=mysql_query("SELECT accountname FROM accounts WHERE email='".$email."' AND password='".$password."'");
// 			#$_SESSION['accountname']=mysql_fetch_array($query2);
//
// 			#$query3=mysql_query("SELECT company FROM accounts WHERE email='".$email."' AND password='".$password."'");
// 			#$_SESSION['company']=mysql_fetch_array($query3);
//
// 			#$query4=mysql_query("SELECT  FROM account_type WHERE email='".$email."' AND password='".$password."'");
// 			#$_SESSION['account_type']=mysql_fetch_array($query4);
//
// 			$_SESSION['sig']="OK";
// 			echo('<script>window.location="home.php"</script>');
// 	}
// }
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
						Installer and Realtor Login
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
							<input type="submit" name="submit" value="Login">
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
