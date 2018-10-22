<html>
  <title> Info here </title>
  <body>
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
    <table>
        <?php
            foreach ($_POST as $key => $value) {
                echo "<tr>";
                echo "<td>";
                echo $key;
                echo "</td>";
                echo "<td>";
                echo $value;
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <?php

      $password = $_POST['password'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $accountname = $first_name + " " + $last_name;
      $company = $_POST['company'];
      $email = $_POST['email'];
      $account_type = $_POST['account_type'];
      $zipcode = $_POST['zipcode'];
      $cellnumber = $_POST['cellnumber'];
      $homenumber = $_POST['homenumber'];
      $banknumber = $_POST['banknumber'];
      $routingnumber = $_POST['routingnumber'];


      $sql = "INSERT INTO accounts(accountname, password, first_name, last_name,
        company, email, account_type, zipcode, cellnumber, homenumber, banknumber, routingnumber)
        VALUES ($accountname, $password, $first_name, $last_name,
          $company, $email, $account_type, $zipcode, $cellnumber, $homenumber, $banknumber, $routingnumber)";
     ?>
  </body>
</html>
