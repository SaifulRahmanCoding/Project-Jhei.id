<?php
// menmapilkan file koneksi
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

// status tidak error
$error = 0;

//mendapatkan data ID
if (isset($_GET['id_carousel'])) {
	$id_carousel = $_GET['id_carousel'];
}
else {
	echo "ID carousel tidak ditemukan! <a href='admin-carousel.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM carousel WHERE id_carousel = '$id_carousel'";
$result = mysqli_query($db,$query);

foreach($result as $carousel){
	$foto = $carousel['foto'];
	$kode = $carousel['ket_carousel'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Edit Promo</title>
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

							<div class="col-12 p-3 p-sm-5 bg-white">

								<h2 align="center" class="mb-5">Edit Promo</h2>

								<form action="action_edit_carousel.php" method="POST" enctype="multipart/form-data">

									<input type="hidden" name="idcarousel" value='<?php echo $id_carousel;?>'>

									<div class="form-group mb-3 text-center">
										<img src="<?php echo $foto?>" class="preview-carosuel">
									</div>

									<div class="form-group mb-2">

										<label for="foto" class="mb-2">Upload Foto carousel Baru</label>

										<input name="foto" id="foto" class="form-control" type="file">

										<p class="card-text mt-1" style="font-size: 10px; color: red !important;">*di sarankan upload gambar ratio WideScreen [ 16 : 9 ]</p>

									</div>

									<div class="form-group mb-3">

										<label for="ketCarousel" class="mb-2">Kode Promo/ Voucher</label>

										<input name="ketCarousel" id="ketCarousel"  class="form-control" type="text" placeholder="contoh : B2GET1MERDEKA" value="<?php echo $kode?>" required>

									</div>

									<div class="col-12 d-flex justify-content-center">
										<input type="submit" name="submit" value="Edit" class="btn text-white col-6 mt-3 mb-3">
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