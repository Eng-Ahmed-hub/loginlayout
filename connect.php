<?php


// $firstname = $_POST["firstName"];
// $lastName  = $_POST["lastName"];
// $mail      = $_POST["mail"];
// $pass      = $_POST["pass"];
// $dates     = $_POST["dates"];
// $phone     = $_POST["phone"];


// echo $firstname . "<br>";
// echo $lastName . "<br>";
// echo $mail . "<br>";
// echo $pass . "<br>";
// echo $dates . "<br>";
// echo $phone . "<br>";

$localhost = "localhost";
define ("username" , "root");
define ("password", "");
$dbname  ="members";

// Create connection
$conn = mysqli_connect($localhost, username, password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";