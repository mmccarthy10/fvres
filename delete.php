<?php
session_start();

$delete_id = $_GET['del'];
// echo($delete_id);
// exit();

$servername = "localhost";
$username = "fvres";
$password = "password";
$dbname = "fvres";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Define the query
$query = "DELETE FROM accounts WHERE account_id={$delete_id} LIMIT 1";


//sends the query to delete the entry
mysqli_query($conn, $query);

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
