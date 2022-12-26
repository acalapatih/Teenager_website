<?php
session_start();
include '../koneksi.php';
$subject = $_POST['subject'];
$description = $_POST['description'];
$date = $_POST['date'];
$id_user = $_SESSION['id_user'];
// $status = isset($_POST['status']) ? 1 : 0;

mysqli_query($conn, "INSERT INTO assignment VALUES('','$id_user', '$subject','$description','$date','0')");

header("location:assignment.php");
?>
