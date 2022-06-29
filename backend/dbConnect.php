<?php
$servername = "localhost";
$username = "akma";
$password = "AKMA@2kema";
$dbname = "participant";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>