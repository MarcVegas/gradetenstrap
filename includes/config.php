<?php
// Create connection
$conn = mysqli_connect("localhost","root","","dbusers");

// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>