<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Install</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

		<!-- FVRES custom styles -->
		<link href="css/fvres.css" rel="stylesheet">

  </head>

  <body>
<?php
session_start();
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
if ($_REQUEST['submit'] == "true") {
$flag = 0;
if ($_REQUEST['ground_post'] != "") {
$flag += 1;
}
if ($_REQUEST['brochure_box'] != "") {
$flag += 2;
}
if ($_REQUEST['panel'] != "") {
$flag += 4;
}
if ($_REQUEST['rider'] != "") {
$flag += 8;
}
$sql = "INSERT INTO jobs (street_address, zipcode, city, job_type, rider_info, realtor, installer, job_flags, job_state, comments, price, date) 
VALUES ('" .
$_REQUEST['address'] . "', '" .
$_REQUEST['zipcode'] . "', '" .
$_REQUEST['city'] . "', '" .
"1', '', '" .
$_SESSION['id'] . "', '" .
"-1', '" .
$flag . "', '" .
"0', '" .
$_REQUEST['message'] . "', '" .
"10.00', '" .
date("Y-m-d") . "')";
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
        <a class="navbar-brand" href="index.php">Name (insert)<br /> Company(insert)</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
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



    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Removal Page
        <!--<small>Subheading</small>-->
      </h1>

      <div class="row">
        <div class="col-lg-12 mb-4">
          <form action="./realtor_remove_page.php" method="post">
            <label for="address"><b>Address</b></label>
            <input id="address" name="address" type="text" placeholder="1234 Main St" required></br>

            <label for="city"><b>City</b></label>
            <input id="city" name="city" type="text" value="" required></br>

            <label for="state"><b>State</b></label>
            <input id="state" name="state" type="text" value="Illinois" required></br>
            <!-- TODO: posssible Javascript to autofill / complete typing -->

            <label for="zipcode"><b>Zipcode</b></label>
            <input id="zipcode" name="zipcode" type="text" minlength="5" maxlength="5" required></br>

            <!--TODO: Create JS and JQuery to autofill options and create running tally of prices-->

            <label for="message"><b>Message</b></label>
            <input type="text" name="message" placeholder="Notes, special instructions, etc..."> </input><br />

            <label for="total"><b>Total</b></label>
            <input id="total" name="total" type="text" readonly></br>
            <!-- TODO get total working -->

            <input type="submit" value="Create">
			<input type="hidden" name="submit" value="true">
          </form>
        </div>
      </div>

			<div class="row">
				<div class="col-lg-12 mb-4" style="text-align:center;">
					<br /><br />
					<a href='realtor_home.html'><button class="btn btn-primary main-button">
							<span style="font-size:50px;">BACK</span></button></a>
				</div>
			</div>

    </div>





    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
