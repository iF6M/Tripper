<?php

$conn = mysqli_connect("localhost","root","root", "Users");


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phoneNumber = $_POST['phoneNumber'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$birthday = $_POST['birthday'];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
  echo "Registration successful!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>