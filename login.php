<?php
session_start();

include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0) {
  $data = mysqli_fetch_assoc($login);

  $_SESSION['username'] = $data['username'];
  $_SESSION['id_user'] = $data['id_user'];
  $_SESSION['status'] = "login";

  header("location:toDo/todo.php");
}
else {
  header("location:index.php");
}
?>