<?
// koneksi ke database
require_once('koneksi.php');

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
	<title>Halaman Admin</title>
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
				<div id="dashboard">
					<!-- <div class="ps-3 pe-3 pt-2">
						<a class="fs-2 text-decoration-none text-dark fw-bolder">Dashboard</a>
					</div> -->
					<div class="row mt-3 mt-sm-0 ps-5 pe-5 ps-sm-2 pe-sm-2 p-0 p-sm-3 d-flex justify-content-center">

						<div class="col-12 col-sm-6 col-lg-4 p-2 d-flex justify-content-center">
							<div class="bungkus shadow-sm d-flex col-10 justify-content-center">
								<?
								$query = "SELECT * FROM produk";
								$result = mysqli_query($db,$query);

								$jumlah_produk = mysqli_num_rows($result);
								?>

								<div class="col-5 box-produk p-2 pt-4 pb-4 text-center">
									<h1 class="fw-bolder"><?=$jumlah_produk?></h1>
									<a class="text-decoration-none text-secondary fw-bolder">Produk</a>
								</div>

								<div class="col-5 p-2 text-center d-flex justify-content-start align-items-center">
									<i class="icon1 fas fa-shopping-bag"></i>
								</div>
							</div>

						</div>

						<div class="col-12 col-sm-6 col-lg-4 p-2 d-flex justify-content-center">
							<div class="bungkus2 shadow-sm d-flex col-10 justify-content-center">

								<?
								$query = "SELECT * FROM artikel";
								$result = mysqli_query($db,$query);

								$jumlah_postingan = mysqli_num_rows($result);
								?>

								<div class="col-5 box-postingan p-2 pt-4 pb-4 text-center">
									<h1 class="fw-bolder"><?=$jumlah_postingan?></h1>
									<a class="text-decoration-none text-secondary fw-bolder">Artikel</a>
								</div>

								<div class="col-5 p-2 text-center d-flex justify-content-start align-items-center">
									<i class="icon2 fas fa-newspaper"></i>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-6 col-lg-4 p-2 d-flex justify-content-center">
							<div class="bungkus3 shadow-sm d-flex col-10 justify-content-center">

								<?
								$query = "SELECT * FROM carousel";
								$result = mysqli_query($db,$query);

								$jumlah_carousel = mysqli_num_rows($result);
								?>

								<div class="col-5 box-carousel p-2 pt-4 pb-4 text-center">
									<h1 class="fw-bolder"><?=$jumlah_carousel?></h1>
									<a class="text-decoration-none text-secondary fw-bolder">Promo</a>
								</div>

								<div class="col-5 p-2 text-center d-flex justify-content-start align-items-center">
									<i class="icon3 fas fa-image"></i>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<?require('config/scriptAdmin.php');?>
</body>
</html>