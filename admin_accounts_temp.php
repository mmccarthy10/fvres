<!DOCTYPE html>
<html lang="en">
	<style>
.btn-sq-lg{
	width: 250px !important;
	height: 250px !important;
}
	</style>

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Home</title>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/modern-business.css" rel="stylesheet">

		<!-- FVRES custom styles -->
		<link href="css/fvres.css" rel="stylesheet">

	</head>

	<body>

<?php
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

if ($_GET['del'] != '') {
$sql = "DELETE FROM accounts WHERE account_id=" . $_GET['del'];

if (mysqli_query($conn, $sql)) {
    echo "Successful deletion<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

if ($_POST['submit'] == 1) {
$sql = "INSERT INTO accounts (accountname, password, first_name, last_name, company, email, account_type, zipcode, cellnumber, homenumber, banknumber, routingnumber)
VALUES ('" .
$_POST['accountname'] . "', '" .
$_POST['password'] . "', '" .
$_POST['first_name'] . "', '" .
$_POST['last_name'] . "', '" .
$_POST['company'] . "', '" .
$_POST['email'] . "', '" .
$_POST['account_type'] . "', '" .
$_POST['zipcode'] . "', '" .
$_POST['cellnumber'] . "', '" .
$_POST['homenumber'] . "', '" .
$_POST['banknumber'] . "', '" .
$_POST['routingnumber'] . "') " .

"";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?> 
		<!-- Navigation -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container">
				<a class="navbar-brand" href="index.html">Name (insert)<br /> Company(insert)</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="about.html">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.html">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Portfolio
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
								<a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
								<a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
								<a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
								<a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
								<a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Blog
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
								<a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
								<a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
								<a class="dropdown-item" href="blog-post.html">Blog Post</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Other Pages
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
								<a class="dropdown-item" href="full-width.html">Full Width Page</a>
								<a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
								<a class="dropdown-item" href="faq.html">FAQ</a>
								<a class="dropdown-item" href="404.html">404</a>
								<a class="dropdown-item" href="pricing.html">Pricing Table</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<h2>Hover Rows</h2>
			<table class="table table-hover admin-inbox">
				<thead>
					<tr>
<th>ID</th>
<th>Account Name</th>
<th>First Name</th>
<th>Last Name</th>
<th>Company</th>
<th>Email</th>
<th>Account Type</th>
<th>Zip Code</th>
<th>Cell Number</th>
<th>Company Number</th>
<th>Bank Number</th>
<th>Routing Number</th>
<th>Delete?</th>
					</tr>
				</thead>
				<tbody>
<?php
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

$sql = "SELECT * FROM accounts";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
echo "<tr>\n<td>" . 
$row["account_id"] . "</td>\n<td>" . 
$row["accountname"] . "</td>\n<td>" . 
$row["first_name"] . "</td>\n<td>" . 
$row["last_name"] . "</td>\n<td>" . 
$row["company"] . "</td>\n<td>" . 
$row["email"] . "</td>\n<td>" . 
$row["account_type"] . "</td>\n<td>" . 
$row["zipcode"] . "</td>\n<td>" . 
$row["cellnumber"] . "</td>\n<td>" . 
$row["homenumber"] . "</td>\n<td>" . 
$row["banknumber"] . "</td>\n<td>" . 
$row["routingnumber"] . "</td>\n<td>
<a href='./test.php?del=" . $row["account_id"] . "'>x</a></td>\n</tr>\n";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
				</tbody>
			</table>
			<div class="row">
				<div class="col-lg-12 mb-4" style="text-align:center;">
					<br /><br />
					<a href='admin_home.html'><button class="btn btn-primary main-button">
							<span style="font-size:50px;">BACK</span></button></a>
				</div>
			</div>
<div class="container">
<!--<form action="./test.php" method="post">
Account Name: <input type="text" name="accountname"><br>
Password: <input type="password" name="password"><br>
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Company: <input type="text" name="company"><br>
Email: <input type="text" name="email"><br>
Account Type: <input type="text" name="account_type"><br>
Zip Code: <input type="text" name="zipcode"><br>
Cell Number: <input type="text" name="cellnumber"><br>
Work Number: <input type="text" name="homenumber"><br>
Bank Number: <input type="text" name="banknumber"><br>
Routing Number: <input type="text" name="routingnumber"><br>
<input type="hidden" name="submit" value="1"/>
<input type="submit">
</form>-->
</div>
		</div>


		<!-- Footer -->
		<footer class="py-5 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">Copyright &copy; FVRES</p>
			</div>
			<!-- /.container -->
		</footer>

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	</body>

</html>
