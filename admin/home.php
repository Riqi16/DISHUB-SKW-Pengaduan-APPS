
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama Project PKL</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
        .baru{
        
            
        }
    </style>
</head>

<?php
include '../config/koneksi.php';
$masyarakat = mysqli_query($koneksi,"SELECT * FROM masyarakat");
$jml_masyarakat =mysqli_num_rows($masyarakat);

$petugas= mysqli_query($koneksi,"SELECT * FROM petugas");
$jml_petugas =mysqli_num_rows($petugas);

$pengaduan = mysqli_query($koneksi,"SELECT * FROM pengaduan");
$jml_pengaduan =mysqli_num_rows($pengaduan);

$tanggapan = mysqli_query($koneksi,"SELECT * FROM tanggapan");
$jml_tanggapan =mysqli_num_rows($tanggapan);

?>




<div class="container">
	
	<div class="row" >
        <div class="d-flex justify-content-around mb-100">
    
   
		<div class="col-md-2 mt-3">
			<div class="card">
				<div class="card-header"><a class="nav-link" href="index.php?page=masyarakat">Masyarakat</a></div> 
				<div class="card-body"><?php echo $jml_masyarakat;?> Orang</div>
			</div>
		</div>
		<div class="col-md-2 mt-3">
			<div class="card">
				<div class="card-header"><a class="nav-link" href="index.php?page=pengaduan">Pengaduan</a></div>
				<div class="card-body"><?php echo $jml_pengaduan;?> Aduan</div>
			</div>
		</div>
		<div class="col-md-2 mt-3">
			<div class="card">
				<div class="card-header"><a class="nav-link" href="index.php?page=tanggapan">Tanggapan</a></div>
				<div class="card-body"><?php echo $jml_tanggapan;?> Tanggapan</div>
			</div>
		</div>
		<div class="col-md-2 mt-3">
			<div class="card">
				<div class="card-header"><a class="nav-link" href="index.php?page=petugas">Petugas</a></div>
				<div class="card-body"><?php echo $jml_petugas;?> Petugas</div>
			</div>
		</div>
    </div>
    </div>
	</div>
