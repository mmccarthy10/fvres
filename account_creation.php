<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
  <head>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Account Creation</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

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

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Account Creation
        <!--<small>Subheading</small>-->
      </h1>

      <!--Start of entering information-->
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mb-4">
            <form action="account_values.php" method="post">

              <div class="form-group row">
                <label for="first_name" class="col-sm-2 col-form-label col-form-label-md"><b>First Name</b></label>
                <div class="col-sm-10 col-form-label-md">
                  <input id="first_name" name="first_name"  type="text" required></br>
                </div>
              </div>

              <div class="form-group row">
                <label for="last_name" class="col-sm-2 col-form-label col-form-label-md"><b>Last Name</b></label>
                <div class="col-sm-10 col-form-label-md">
                  <input id="last_name" name="last_name" type="text" required></br>
                </div>
              </div>

              <div class="form-group row">
                <label for="company" class="col-sm-2 col-form-label col-form-labe-md"><b>Company</b></label>
                <div class="col-sm-10 col-form-label-md">
                  <input id="company" name="company" type="text" required></br>
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label col-form-labe-md"><b>email</b></label>
                <div class="col-sm-10 col-form-label-md">
                  <input id="email" type="email" name="email" required></br>
                </div>
              </div>

              <div class="form-group row">
                <label for="account_type" class="col-sm-2 col-form-label col-form-labe-md"><b>Account Type</b></label>
                <div class="col-sm-10 col-form-label-md">
                  <select id="account_type" name="account_type">
                    <option value="0">Admin</option>
                    <option value="1">Realtor</option>
                    <option value="2">Installer</option>
                  </select><br />
                </div>
              </div>

              <div class="form-group row">
                <label for="zipcode" class="col-sm-2 col-form-label col-form-labe-md"><b>Zipcode</b></label>
                <div class="col-sm-10 col-form-label-md">
                  <input id="zipcode" name="zipcode" type="text" minlength="5" maxlength="5" required></br>
                </div>
              </div>

              <div class="form-group row">
                <label for="cellnumber" class="col-sm-2 col-form-label col-form-labe-md"><b>CellPhone Number</b></label>
                <div class="col-sm-10 col-form-label-md">
                  <input id="cellnumber" name="cellnumber" type="tel" minlength="10" maxlength="10" required></br>
                </div>
              </div>

              <div class="form-group row">
                <label for="homenumber" class="col-sm-2 col-form-label col-form-labe-md"><b>Home Number</b></label>
                <div class="col-sm-10 col-form-label-md">
                  <input id="homenumber" name="homenumber" type="tel" minlength="10" maxlength="10" required></br>
                </div>
              </div>

              <div class="form-group row">
                <label for="banknumber" class="col-sm-2 col-form-label col-form-labe-md"><b>Bank Account Number</b></label>
                <div class="col-sm-10 col-form-label-md">
                  <input id="banknumber" name="banknumber" type="text"></br>
                </div>
              </div>

              <div class="form-group row">
                <label for="routingnumber" class="col-sm-2 col-form-label col-form-labe-md"><b>Routing Number</b></label>
                <div class="col-sm-10 col-form-label-md">
                  <input id="routingnumber" name="routingnumber" type="routingnumber"></br>
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label col-form-labe-md"><b>Password</b></label>
                <div class="col-sm-10 col-form-label-md">
                  <input id="password" name="password" type="password" required></br>
                </div>
              </div>

              <div class="form-group row">
                <label for="confirm_password" class="col-sm-2 col-form-label col-form-labe-md"><b>Confirm Password</b></label>
                <div class="col-sm-10 col-form-label-md">
                  <input id="password_confirm" name="password_confirm" type="password" oninput="check(this)" required></br>
                </div>
              </div>

              <script language='javascript' type='text/javascript'>
                  function check(input) {
                      if (input.value != document.getElementById('password').value) {
                          input.setCustomValidity('Password Must be Matching.');
                      } else {
                          // input is valid -- reset the error message
                          input.setCustomValidity('');
                      }
                  }
              </script>

              <div class="row">
                <div class="col-lg-12 mb-4" style="text-align:left">
                  <button class="btn btn-primary main-button" type="submit" name="submit" value="submit">
                      <span style="font-size:50px;">Submit</span></button>
                </div>

                <!-- <div class="col-lg-12 mb-4" style="text-align:left;">
                  <a href='admin_accounts_temp.php'><button class="btn btn-primary main-button">
                      <span style="font-size:50px;">BACK</span></button></a>
                </div>
              </div> -->

              <!-- <input type="submit" name="submit" value="Submit"> -->
            </form>
          </div>
        </div>
      </div>





</div>
    </div>
    <!-- /.container -->

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
