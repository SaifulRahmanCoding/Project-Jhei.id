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
							<h3 align="center" class="mb-5">Tambah Produk Baru</h3>
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
									<label for="caption" class="mb-2">Caption</label>
									<textarea name="caption" class="ckeditor form-control" id="ckeditor" rows="8" placeholder="isi caption produk jika ada!"></textarea>
								</div>

								<div class="col-12 d-flex justify-content-center">
									<input type="submit" name="submit" value="Input" class="btn text-white col-6 mt-3 mb-3">
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