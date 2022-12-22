<?php
//memulai proses hapus data

//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=siswa_id
if(isset($_GET['id'])){

 	//inlcude atau memasukkan file koneksi ke database
 	include('../koneksi.php');

 	$id = $_GET['id'];

 	$cek = mysqli_query($conn, "SELECT id_assignment FROM assignment WHERE id_assignment='$id'") or die(mysqli_error($conn));

 	if(mysqli_num_rows($cek) == 0){

 	echo '<script>window.history.back()</script>';

 	}else{

 	$del = mysqli_query($conn, "DELETE FROM assignment WHERE id_assignment='$id'");

 	if($del){

 	echo 'Data berhasil dihapus! ';	//Pesan jika proses hapus berhasil
 	echo '<a href="assignment.php">Kembali</a>'; //membuat Link untuk kembali ke halaman beranda

 	}else{

 	echo 'Gagal menghapus data! ';	//Pesan jika proses hapus gagal
 	echo '<a href="assignment.php">Kembali</a>'; //membuat Link untuk kembali ke halaman beranda

 	}

 	}

} else{
    echo '<script>window.history.back()</script>';
}
?>