<?php
session_start();
include '../koneksi.php';
$id_user = $_SESSION['id_user'];
$description = $_POST['description'];
$date = $_POST['date'];

mysqli_query($conn, "INSERT INTO todo VALUES('','$id_user', '$description','$date','0')");

header("location:todo.php");
