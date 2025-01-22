<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aplikasi Pengaduan Masyarakat</title>
	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
<style>
        body {
            font-family: 'Arial', sans-serif;
            /* Ganti 'assets/images/your-image.jpg' dengan lokasi gambar yang Anda inginkan */
            background-image: url('../asset/img/dishub.jpg'); 
            background-size: cover; /* Agar gambar menutupi seluruh halaman */
            background-position: center center; /* Agar gambar berada di tengah */
            background-attachment: fixed; /* Gambar tetap saat halaman di-scroll */
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h4 {
            color: black;
            font-weight: bold;
        }
        table tr th {
            
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }

        .card123 {
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }
        nav {
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }

        .card-header {
            background: rgba(2, 73, 253, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            color: #000000;
            padding: 10px;
            border-radius: 8px 8px 0 0;
            font-size: 1.25rem;
            text-align: center;
        }

        .card-body {
            padding: 15px;
            line-height: 1.6;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid  rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }

        .card-footer {
            padding: 10px;
            text-align: right;
            background: rgba(2, 73, 253, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border-radius: 0 0 8px 8px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .col-md-8, .col-md-4 {
            flex: 1;
            min-width: 300px;
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

        @media (max-width: 768px) {
            .col-md-8, .col-md-4 {
                flex: 1 1 100%;
            }
        }

    </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg ">
		<div class="container">
			<a class="navbar-brand" href="index.php">Aplikasi Pengaduan Masyarakat</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
				
						<?php
						if ($_SESSION['login']=='admin'){ ?>
							<a class="nav-link" href="index.php?page=tanggapan">Data Tanggapan</a>
							<a class="nav-link" href="index.php?page=pengaduan">Data Pengaduan</a>
							<a class="nav-link" href="index.php?page=masyarakat">Data Masyarakat</a>
							<a class="nav-link" href="index.php?page=petugas">Data Petugas</a>
							<a class="nav-link btn-custom" href="../config/aksi_logout.php">Keluar</a>

						<?php } elseif ($_SESSION['login']=='petugas') { ?>
							<a class="nav-link" href="index.php?page=pengaduan">Data Pengaduan</a>
							<a class="nav-link" href="index.php?page=tanggapan">Data Tanggapan</a>
							<a class="nav-link btn-custom" href="../config/aksi_logout.php">Keluar</a>

						<?php } elseif ($_SESSION['login']=='masyarakat'){ ?>
							<a class="nav-link btn-custom" href="../config/aksi_logout.php">Keluar</a>

						<?php } else { ?>
							<a class="nav-link btn-custom" href="index.php?page=registrasi">Daftar Akun</a>
							<a class="nav-link btn-custom" href="index.php?page=login">Login</a>

						<?php } ?>

				
				</ul>
			</div>
		</div>
	</nav>