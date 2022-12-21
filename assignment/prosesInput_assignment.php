<?php
include '../koneksi.php';
$assignment_title = $_POST['assignment_title'];
$done = isset($_POST['done']) ? 1 : 0;

mysqli_query($conn, "INSERT INTO todo VALUES('','$assignment_title','$done')");

header('location:../index.html');
?>