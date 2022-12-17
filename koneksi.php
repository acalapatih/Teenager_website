<?php
// membuat koneksi
$conn = mysqli_connect("localhost", "root","","db_taskmanager");

// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);
?>