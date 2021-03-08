<?php
$servername = "localhost";
$username = "20mca048";
$password = "2726";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"20mca048");

// Check connection
if (!$conn) {
  die("Connection failed : " .mysqli_connect_error());
}
echo "Connected successfully !!";
?>