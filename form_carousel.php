<?php
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
	<title>Form Input Promo</title>
	<?php
	require('config/styleAdmin.php');
	?>
</head>
<body>
	<div class="d-flex" id="wrapper" style="align-items: flex-start;">
		<?php require('komponen/sidebar-admin.php'); ?>
		<!-- Page content wrapper-->
		<div id="page-content-wrapper">
			
			<!-- top nav -->
			<?php require('komponen/top-nav-admin.php'); ?>

			<!-- Page content-->
			<div class="container-fluid">
				<!-- konten -->
				<!-- form input -->
				<div id="form" class="pt-5">

					<div class="container">

						<div class="row d-flex justify-content-center">

							<div class="col-12 p-5 bg-white">
								<h2 align="center" class="mb-5">Tambah Promo</h2>
								<form action="action.php" method="POST" enctype="multipart/form-data">

									<div class="form-group mb-2">

										<label for="foto" class="mb-2">Foto Carosuel</label>

										<input name="foto" id="foto" class="form-control" type="file">

										<p class="card-text mt-1" style="font-size: 10px; color: red !important;">*di sarankan upload gambar ratio WideScreen [ 16 : 9 ]</p>

									</div>

									<div class="form-group mb-3">

										<label for="ketCarousel" class="mb-2">Kode Promo/ Voucher</label>

										<input name="ketCarousel" id="ketCarousel"  class="form-control" type="text" placeholder="contoh : B2GET1MERDEKA" required>

									</div>

									<div class="col-12 d-flex justify-content-center">
										<input type="submit" name="submit" value="Simpan" class="btn text-white col-6 mt-3 mb-3">
										&nbsp
										<a href="admin-carousel.php" class="btn text-white col-6 mt-3 mb-3">Kembali</a>
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
	<?php require('config/scriptAdmin.php');?>
</body>
</html>