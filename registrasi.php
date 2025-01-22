
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Pengaduan Masyarakat</title>
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

    <style>
        /* Menggunakan Flexbox untuk menjaga footer di bawah */
        html, body {
            height: 100%; /* Menjamin tinggi halaman penuh */
            margin: 0; /* Menghilangkan margin default */
        }

        /* Menambahkan gambar latar belakang pada seluruh halaman */
        body {
            justify-content: center;
            background-image: url('asset/img/dishub.jpg');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            color: #fff; /* Mengubah warna teks untuk kontras dengan latar belakang */
        }

        /* Bagian utama konten */
        .container {
            flex: 1; /* Membuat konten utama mengisi ruang yang tersedia */
            padding: 20px;
        }

        /* Menjaga footer di bawah */
        .footer {
            position: relative;
            bottom: 0;
            width: 100%;
            background-color: lightgray; /* Ubah sesuai dengan kebutuhan */
        }

        /* Gaya untuk tombol login dan daftar akun */
        .btn-custom {
            background-color: #0056b3; /* Warna biru */
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 16px; /* Ukuran tombol lebih kecil */
            font-size: 0.9rem; /* Ukuran font sedikit lebih kecil */
            margin-right: 10px; /* Memberikan jarak antara tombol */
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-custom:hover {
            background-color: #003f7f; /* Warna biru gelap saat hover */
            transform: translateY(-3px); /* Efek angkat tombol */
        }

        .btn-custom:active {
            transform: translateY(2px); /* Efek tombol ditekan */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .btn-custom:focus {
            outline: none; /* Menghilangkan outline saat fokus */
        }

        /* Atur jarak antar tombol */
        .nav-link {
            margin-bottom: 10px; /* Memberikan jarak antar tombol jika diatur secara vertikal */
        }
        .card-header{
        	color: black;
        	justify-items: center;
        	margin-top: 8px;
        	font-weight: bold;
        }
        .card-footer{
        	justify-content: center;
        	
        	font-weight: bold;
        }
        .card-body{
        	 background: rgba(255, 255, 255, 0.2);
				border: 1px solid  rgba(255, 255, 255, 0.3);
				backdrop-filter: blur(10px); 			padding: 30px;
			border-radius: 16px;
        }
    </style>
</head>
<div >
	<div class="col-md-4 offset-md-4">
		<div class="card123">	
			<div class="card-body">
				
				<form action="" method="POST">
					<div class="card-header">
					<h2>REGISTER</h2>

				</div>
					<div class="mb-3">
						<label class="form-label">NIK</label>
						<input type="number" class="form-control" name="nik" placeholder="Masukan NIK" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Masukan Username" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
					</div>
					<div class="mb-3">
						<label class="form-label">No. Telp</label>
						<input type="number" class="form-control" name="telp" placeholder="Masukan No.telp" required>
					</div>
					<div class="card-footer">
					<button type="submit" name="kirim" class="btn btn-primary">DAFTAR</button>
					<a href="login.php" class="m-3">Sudah punya akun? Login disini</a>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
</html>

<?php
include 'config/koneksi.php';
if (isset($_POST['kirim'])){
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$telp = $_POST['telp'];
	$level = 'masyarakat';

	$query = mysqli_query($koneksi, "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp','$level')");
	if ($query) {
        echo "<script> alert('Data Berhasil Disimpan');
		window.location='login.php'; </script>";
	}
}


?>