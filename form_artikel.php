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
	<title>Form Input Postingan</title>
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

					<div class="container">

						<div class="row d-flex justify-content-center">

							<div class="col-12 p-3 p-sm-5 bg-white">
								<h3 align="center" class="mb-5">Buat Postingan Baru</h3>
								<form action="action_artikel.php" method="POST" enctype="multipart/form-data">

									<div class="form-group mb-2">

										<label for="fotoArtikel" class="mb-2">Foto Postingan</label>

										<input name="fotoArtikel" id="fotoArtikel" class="form-control" type="file">

									</div>

									<div class="form-group mb-3">

										<label for="judulArtikel" class="mb-2">Judul Postingan</label>

										<input name="judulArtikel" id="judulArtikel"  class="form-control" type="text" placeholder="Judul" required>

									</div>

									<div class="form-group mb-3">

										<label for="jenisPostingan" class="mb-2">Jenis Postingan</label>

										<select id="jenisPostingan" class="form-control" name="jenisPostingan" required>
											<option value="">- Pilih Jenis</option>
											<option value="PRODUK">PRODUK</option>
											<option value="ARTIKEL">ARTIKEL</option>

										</select>
									</div>

									<div class="form-group mb-3">
										<label for="tgl_posting" class="mb-2">Tanggal Posting</label>
										<input name="tgl_posting" id="tgl_posting"  class="form-control" type="date" required>
									</div>

									<div class="form-group mb-3">
										<label for="konten" class="mb-2">Konten</label>
										<textarea name="konten" class="ckeditor form-control" id="ckeditor" rows="8" placeholder="isi konten"></textarea>
									</div>

									<div class="col-12 d-flex justify-content-center">
										<input type="submit" name="submit" value="Input" class="btn text-white col-6 mt-3 mb-3">
										&nbsp
										<a href="admin-postingan.php" class="btn text-white col-6 mt-3 mb-3">Kembali</a>
									</div>

								</form>

							</div>

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