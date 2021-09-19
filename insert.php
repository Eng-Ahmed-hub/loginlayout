<?php


$firstname = $_POST["firstName"];
$lastName  = $_POST["lastName"];
$mail      = $_POST["mail"];
$pass      = $_POST["pass"];
$dates     = $_POST["dates"];
$phone     = $_POST["phone"];


require "connect.php";

if(isset($_POST["reg"])){

$sql = "INSERT INTO users (firstname, lastname, mail, pass, dates, phone)
VALUES ('$firstname', '$lastName ', '$mail' , '$pass' , '$dates' , '$phone')";
}

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>