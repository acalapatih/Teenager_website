<?php
// membuat koneksi
$conn = mysqli_connect("localhost", "root","","db_taskmanager");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>