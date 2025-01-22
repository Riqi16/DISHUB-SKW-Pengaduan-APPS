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
            color: #fff; 
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
<body>
	<div >
		<div class="col-md-4 offset-md-4 ">
			<div class="card123">

				<div class="card-body" >
				<form action="config/aksi_login.php" method="POST">
					<div class="card-header" >
						<h2>LOGIN</h2>
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
						<label class="form-label">Login Sebagai</label>
						<select class="form-control" name="level">
							<option value="masyarakat">Masyarakat</option>
							<option value="petugas">Petugas</option>
						</select>
						
					</div>
					<div class="card-footer" style="margin-bottom: 15px;">
							<button type="submit" name="kirim" class="btn btn-primary">LOGIN</button>
							<a href="registrasi.php" class="m-3">Belum punya akun? Daftar disini</a>
						</div>
			</form>
		</div>
	</div>
</div>
</div>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
</body>
</html>