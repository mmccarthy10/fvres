<<<<<<< HEAD
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
  echo "Connected successfully";
?>
=======
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
  echo "Connected successfully";
?>
>>>>>>> 673ecb0610ebe7fb6aa20d5dcf593921d607f6c5
