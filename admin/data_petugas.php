
<?php
include '../config/koneksi.php';
	if (isset($_POST['kirim'])){
		$nama = $_POST['nama_petugas'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$telp = $_POST['telp'];
		$level = 'petugas';

		$query = mysqli_query($koneksi, "INSERT INTO petugas(nama_petugas, username, password, telp, level) VALUES ('$nama','$username','$password','$telp','$level')");
		if ($query) {
			echo "<script> alert('Data Berhasil Disimpan');
			window.location='index.php?page=petugas'; </script>";
		}
	}
?>

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					DATA PETUGAS
				</div>
				<div class="card-body">
					<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData">Tambah Data</a>

					<table class="table table-striped">
						<thead>
							<tr>
								<th>NO</th>
								<th>NAMA</th>
								<th>USENAME</th>
								<th>TELP</th>
								<th>LEVEL</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include '../config/koneksi.php';
							$no = 1;
							$query_data = mysqli_query($koneksi, "SELECT * FROM petugas");
							while ($data = mysqli_fetch_array ($query_data)) { ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $data['nama_petugas'] ?></td>
									<td><?php echo $data['username'] ?></td>
									<td><?php echo $data['telp'] ?></td>
									<td><?php echo $data['level'] ?></td>
									
									<td>
										<a href="" class="btn btn-danger"data-bs-toggle="modal" data-bs-target="#HapusData<?php echo $data['id_petugas'] ?>">HAPUS</a>
									</td>

									

								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999999999999;"> //prbaikan di tambh style
	<div class="modal-dialog" style="z-index: 9999999999999;">//tambah style
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Petugas</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="" method="POST">
				<div class="modal-body">
					<div class="row mb-3">
						<label class="col-md-4">Nama Lengkap</label>
						<div class="col-md-8">
							<input type="text" name="nama_petugas" class="form-control" placeholder="Masukan Nama Lengkap" required>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-md-4">Username</label>
						<div class="col-md-8">
							<input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-md-4">Password</label>
						<div class="col-md-8">
							<input type="password" name="password" class="form-control" placeholder="Masukan Password" required>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-md-4">Telp</label>
						<div class="col-md-8">
							<input type="number" name="telp" class="form-control" placeholder="Masukan Telp" required>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" name="kirim" class="btn btn-primary">Tambah Data</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal Hapus -->
<?php 
$query_data = mysqli_query($koneksi, "SELECT * FROM petugas");
while ($data = mysqli_fetch_array ($query_data)) { ?>
<div class="modal fade" id="HapusData<?php echo $data['id_petugas'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999999999999;">
	<div class="modal-dialog" style="z-index: 9999999999999;">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="edit_data.php" method="POST">
				<div class="modal-body">
					<input type="hidden" name="id_petugas" class="form-control" value="<?php echo $data['id_petugas'] ?>">
					<p>Apakah kamu yakin ingin menghapus Data <br> <?php echo $data['nama_petugas'] ?></p>
				</div>
				<div class="modal-footer">
					<button type="submit" name="hapus_petugas" class="btn btn-danger">Hapus</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php } ?>