<?php
include '../config/koneksi.php';
session_start();
//perbaikan
	$id_pengaduan = $_POST['id_pengaduan'];
	$query = mysqli_query($koneksi,"SELECT * FROM pengaduan");
	$data = mysqli_fetch_array($query);
	//perbaikan
	mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
	echo "
	<script>
		alert('Data Berhasil Dihapus');
		window.location='index.php';
		</script>
	";//perbaikan
	


?>