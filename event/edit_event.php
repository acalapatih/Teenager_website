<?php
//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=siswa_id
if(isset($_GET['id'])){

 	//inlcude atau memasukkan file koneksi ke database
 	include('../koneksi.php');

 	$id = $_GET['id'];

 	$cek = mysqli_query($conn, "SELECT id_event FROM event WHERE id_event='$id'") or die(mysqli_error($conn));

 	if(mysqli_num_rows($cek) == 0){

 	echo '<script>window.history.back()</script>';

 	}else{

 	$update = mysqli_query($conn, "UPDATE event SET status = 1 WHERE id_event='$id'");

 	//jika query DELETE berhasil
 	if($update){

 	echo 'Data berhasil diubah! ';	//Pesan jika proses hapus berhasil
 	echo '<a href="event.php">Kembali</a>'; //membuat Link untuk kembali ke halaman beranda

 	}else{

 	echo 'Gagal ubah data! ';	//Pesan jika proses hapus gagal
 	echo '<a href="event.php">Kembali</a>'; //membuat Link untuk kembali ke halaman beranda

 	}

 	}

}else{
    echo '<script>window.history.back()</script>';
}
