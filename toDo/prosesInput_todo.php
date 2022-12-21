<?php
include '../koneksi.php';
$description = $_POST['description'];
$date = $_POST['date'];
// $status = isset($_POST['status']) ? 1 : 0;

mysqli_query($conn, "INSERT INTO todo VALUES('','$description','$date','')");

header("location:../index.php");
?>
