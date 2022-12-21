<?php
include '../koneksi.php';
$description = $_POST['description'];
$status = isset($_POST['status']) ? 1 : 0;

mysqli_query($conn, "INSERT INTO todo VALUES('','$description','$status')");

header("location:../index.php");
?>
