<?php
session_start();

include 'koneksi.php';

$user = [
  'email' => $_POST['email'],
  'username' => $_POST['username'],
  'password' => $_POST['password']
];

// check if username is already taken
$check = mysqli_query($conn, "SELECT * FROM user WHERE username='$user[username]' OR email='$user[email]'");
$check = mysqli_num_rows($check);
if($check > 0) {
  header("location:register.php");
  exit;
}

// input user data to database
mysqli_query($conn, "INSERT INTO user VALUES('', '$user[email]', '$user[username]', '$user[password]')");
header("location:index.php");
?>