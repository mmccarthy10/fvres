<?php
session_start();
if(!isset($_SESSION['sig']))
{
  #goto login page if user isnt logged in
  echo('<script>window.location="index.php"</script>');
}
else
{
  if(!isset($_SESSION['accountname']))
  {
    echo "Accountname is not set";
  }

  if(!isset($_SESSION['company']))
  {
    echo "Company is not set";
  }

  if(!isset($_SESSION['account_type']))
  {
    echo "Account type is not set";
  }
}
?>
