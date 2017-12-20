<?php
$con=mysqli_connect("localhost","root","","testdb");
// Check connection
if (!$con)
  {
  die("Connection error: " . mysqli_connect_error());
  }
?>