<?php
$server ="localhost";
$name = "root";
$password = "";
$db = "assignment4db";
$mysqli = new mysqli($server,$name,$password,$db);


// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
    echo "Aman";
}
?>