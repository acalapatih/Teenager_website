<?php
include '../koneksi.php';
$subject = $_POST['subject'];
$description = $_POST['description'];
$date = $_POST['date'];
// $status = isset($_POST['status']) ? 1 : 0;

mysqli_query($conn, "INSERT INTO assignment VALUES('','$subject','$description','$date')");

header("location:../index.php");
?>
