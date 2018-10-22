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
						<th>From</th>
						<th>Message</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<div class="row">
				<div class="col-lg-12 mb-4" style="text-align:center;">
					<br /><br />
					<a href='admin_home.html'><button class="btn btn-primary main-button">
							<span style="font-size:50px;">BACK</span></button></a>
				</div>
			</div>
 <?php
$servername = "localhost";
$username = "fvres";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?> 
<div class="container">
<form action="admin_realtor_inbox.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
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