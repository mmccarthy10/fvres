<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<?php
session_start();
?>
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

    <div class="container">

      <!--<h1 class="my-4">WELCOME REALTOR</h1>-->
      <div class="row">
        <div class="col-lg-12 mb-4" style="text-align:center;">
          <br /><br />
          <a href='realtor_install_page.php'><button class="btn btn-primary main-button">
            <span style="font-size:50px;">INSTALL</span></button></a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 mb-4" style="text-align:center;">
          <br /><br />
          <a href='realtor_remove_page.php'><button class="btn btn-primary main-button">
            <span style="font-size:50px;">REMOVE</span></button></a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 mb-4" style="text-align:center;">
          <br /><br />
          <a href='realtor_lowen_page.php'><button class="btn btn-primary main-button">
            <span style="font-size:50px;">LOWEN</span></button></a>
        </div>
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
