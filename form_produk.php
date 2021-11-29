<?
// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input Produk</title>
	<?
	require('config/styleAdmin.php');
	?>
</head>
<body>
	<div class="d-flex" id="wrapper" style="align-items: flex-start;">
		<? require('komponen/sidebar-admin.php'); ?>
		<!-- Page content wrapper-->
		<div id="page-content-wrapper">
			
			<!-- top nav -->
			<? require('komponen/top-nav-admin.php'); ?>

			<!-- Page content-->
			<div class="container-fluid">

				<!-- konten -->
				<!-- form input -->
				<div id="form">

					<div class="row d-flex justify-content-center">

						<div class="col-12 p-3 p-sm-5 bg-white">
							<h2 align="center" class="mb-5">Tambah Produk Baru</h2>
							<form action="action_produk.php" method="POST" enctype="multipart/form-data">

								<div class="form-group mb-2">

									<label for="fotoProduk" class="mb-2">Foto Sempel Produk</label>

									<input name="fotoProduk" id="fotoProduk" class="form-control" type="file">
									<p class="text-danger">*usahakan rasio 1 : 1 atau square</p>

								</div>

								<div class="form-group mb-3">

									<label for="namaProduk" class="mb-2">Nama Produk</label>

									<input name="namaProduk" id="namaProduk"  class="form-control" type="text" placeholder="Nama Produk" required>

								</div>

								<div class="form-group mb-3">

									<label for="harga" class="mb-2">Harga ( Rp )</label>

									<input name="harga" id="harga"  class="form-control" type="number" required>

								</div>

								<div class="form-group mb-3">

									<label for="berat" class="mb-2">Berat ( gram ) </label>

									<input name="berat" id="berat"  class="form-control" type="number" required>

								</div>

								<div class="form-group mb-3">

									<label for="stok" class="mb-2">Stok</label>

									<select id="stok" class="form-control" name="stok" required>
										<option value="READY STOK">READY STOK</option>
										<option value="PRE ORDER">PRE ORDER</option>
										<option value="KOSONG">KOSONG</option>

									</select>
								</div>

								<div class="form-group mb-3">
									<label for="caption" class="mb-2">Deskripsi Produk</label>
									<textarea name="caption" class="ckeditor form-control" id="ckeditor" rows="8" placeholder="isi caption produk jika ada!"></textarea>
								</div>

								<div class="col-12 d-flex justify-content-center">
									<input type="submit" name="submit" value="Simpan" class="btn text-white col-6 mt-3 mb-3">
									&nbsp
									<a href="admin-produk.php" class="btn text-white col-6 mt-3 mb-3">Kembali</a>
								</div>

							</form>

						</div>

					</div>

				</div>
				<!-- end form input -->
				
			</div>
		</div>
	</div>
	<?require('config/scriptAdmin.php');?>
</body>
</html>