<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama Project PKL</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: black;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h4 {
            color:black;
            font-weight: bold;
        }

        .card123  {
           border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
             background: rgba(255, 255, 255, 0.2);
            border: 1px solid  rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }

        .card-header {
          
            background: rgba(2, 73, 253, 0.2);
            border: 1px solid  rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            color: #ffffff;
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
            border: 1px solid  rgba(255, 255, 255, 0.3);
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

        @media (max-width: 768px) {
            .col-md-8, .col-md-4 {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">

        <hr>
        <div class="row mt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">INFORMASI</div>
                    <div class="card-body">
                        <b>Aplikasi Pengaduan Masyarakat ini dibuat untuk memenuhi tugas Proyek PKL Jurusan RPL Tahun 2024.</b>
                        <br><br>
                        Petunjuk penggunaan Aplikasi:
                        <ul>
                            <li>Isi formulir pengaduan dengan data yang lengkap.</li>
                            <li>Kirim laporan pengaduan untuk diproses oleh pihak terkait.</li>
                            <li>Periksa status pengaduan Anda melalui menu status.</li>
                        </ul>
                    </div>
                    <div class="card-footer">Pastikan Anda mengisi semua data dengan benar.</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">KONTAK</div>
                    <div class="card-body">
                        Dikembangkan oleh:
                        <br>
                        Nama: RIQI
                        <br>
                        Kelas: XII RPL 1
                        <br><br>
                        Hubungi kami melalui:
                        <br>
                        Email: riqi12@gmail.com
                        <br>
                        Telepon: +62 838 7147 3274
                    </div>
                    <div class="card-footer">Terima kasih atas perhatian Anda.</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
