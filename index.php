<!DOCTYPE html>
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg  " style=" background: rgba(2, 73, 253, 0.2);
            border: 1px solid  rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px); border-radius: 8px; color: white;">
        <div class="container">
            <a class="navbar-brand text-light" >Aplikasi Pengaduan Masyarakat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn-custom" href="registrasi.php">Daftar Akun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-custom" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {

        }
    } else {
        include 'home.php';
    }
    ?>

    <footer class="footer py-2 " style=" background: rgba(2, 73, 253, 0.2);
            border: 1px solid  rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px); border-radius: 8px; color: white;">
        <div class="container">
            <p class="text-center">Project PKL Siswa RPL | RIQI | SMKN 1 Semparuk</p>
        </div>
    </footer>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
</body>
</html>
