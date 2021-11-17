<?
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
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Edit</title>
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
				<div id="form" class="pt-5">

					<div class="container">

						<div class="row d-flex justify-content-center">

							<div class="col-12 p-3 p-sm-5 bg-white">

								<h3 align="center" class="mb-2">Edit Foto Carousel</h3>

								<form action="action_edit.php" method="POST" enctype="multipart/form-data">

									<input type="hidden" name="idcarousel" value='<? echo $id_carousel;?>'>

									<div class="form-group mb-3 text-center">
										<img src="<?=$foto?>" class="preview">
									</div>

									<div class="form-group mb-2">

										<label for="foto" class="mb-2">Upload Foto carousel Baru</label>

										<input name="foto" id="foto" class="form-control" type="file">

										<p class="card-text mt-1" style="font-size: 10px; color: red !important;">*di sarankan upload gambar ratio WideScreen [ 16 : 9 ]</p>

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
	<?require('config/scriptAdmin.php');?>
</body>
</html>