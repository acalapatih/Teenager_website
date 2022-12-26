<?php
include '../koneksi.php';
session_start();
$name = $_POST['name'];
$description = $_POST['description'];
$date = $_POST['date'];
$time = $_POST['time'];
$id_user = $_SESSION['id_user'];
// $status = isset($_POST['status']) ? 1 : 0;

mysqli_query($conn, "INSERT INTO event VALUES('', '$id_user','$name', '$description', '$date','$time','0')");

header("location:event.php");
