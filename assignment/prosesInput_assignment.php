<?php
include '../koneksi.php';
$subject = $_POST['subject'];
$description = $_POST['description'];
$deadline = $_POST['deadline'];
$status = isset($_POST['status']) ? 1 : 0;

mysqli_query($conn, "INSERT INTO assignment VALUES('','$subject','$description','$deadline','$status')");

header('location:../index.php');
?>