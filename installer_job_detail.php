<!DOCTYPE html>
<?php
session_start();
error_reporting(0);
 ?>
<html lang="en">
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<link rel="icon" href="./favicon.ico" type="image/x-icon">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job Listings</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

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

if ($_GET['clear'] != '') {
$sql = "UPDATE jobs SET job_state='3' WHERE job_id='" . $_GET['clear'] . "' AND installer='" . $_SESSION['id'] . "'";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "Successful deletion<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

$sql = "SELECT * FROM jobs WHERE job_state='2' AND installer='" . $_SESSION['id'] . "' LIMIT 1 OFFSET " . $_GET["id"];
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
echo "<script>window.location.href = './installer_newjobs_page.php;</script>";
}

?>
    <!-- Navigation -->
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="javascript:window.location.href=window.location.href"><?php echo $_SESSION["first_name"] . " " . $_SESSION["last_name"] ?><br /> <?php echo $_SESSION["company"] ?> </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="services.html">Services</a>
            </li> -->
            <li class="nav-item">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Example2
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
                Example3
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
                <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                <a class="dropdown-item" href="blog-post.html">Blog Post</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Example4
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
      <h1 class="mt-4 mb-3">Job Details
        <!--<small>Subheading</small>-->
      </h1>

      <div class="row">
        <div class="col-lg-12 mb-4">
<div class="container">
				<ul><?php
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

$sql = "SELECT * FROM jobs WHERE job_state='2' AND installer='" . $_SESSION['id'] . "' LIMIT 1 OFFSET " . $_GET["id"];
$result = mysqli_query($conn, $sql);
$job_id;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
$job_id = $row["job_id"];
if ($row["job_type"] == 1) {
	echo "<li>Type: Removal</li>";
	} else {
			echo "<li>Type: Installation</li>";
	}
	echo "<li>Realtor: " . $row["realtor"] . "</li>
	<li>Address: " . $row["street_address"] . ", " . $row['city'] . ", " . $row['zipcode'] . "</li>\n";
if ($row['job_flags'] & 1 == 1) {
	echo "<li>Ground Post</li>\n";
}
if ($row['job_flags'] & 2 == 2) {
	echo "<li>Brochure Box</li>\n";
}
if ($row['job_flags'] & 4 == 4) {
	echo "<li>Panel</li>\n";
}
if ($row['job_flags'] & 8 == 8) {
	echo "<li>Rider</li>\n";
}
if ($row['comments'] != '') {
	echo "<li>Comments: " . $row['comments'] . "</li>\n";
}
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
				</ul>
        </div>
      </div>

    </div>

          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
			<div class="row">
				<div class="col-lg-12 mb-4" style="text-align:center;">
					<br /><br />
<?php
	echo "<a href='installer_job_detail.php?id=" . $_GET['id'] . "&clear=" . $job_id . " '><button class='btn btn-primary main-button'>";
?>
							<span style="font-size:50px;">NEXT</span></button></a>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 mb-4" style="text-align:center;">
					<br /><br />
					<a href='installer_newjobs_page.php'><button class="btn btn-primary main-button">
							<span style="font-size:50px;">BACK</span></button></a>
				</div>
			</div>
</div>




    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; FVRES 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
