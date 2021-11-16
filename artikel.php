<?
$halaman = 'artikel';
// koneksi ke database
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sampel artikel</title>
	<?
	require('config/style.php');
	require('config/script.php');
	?>
</head>
<body>
	<!-- header -->
	<?
	require ('komponen/kontak-wa.php');
	require('komponen/mikro-komponen/pesan-modal.php');
	require('komponen/navbar.php');
	?>
	<!-- end header -->

	<div id="artikel">
		<div class="container">
			<div class="row mt-5">
				<div class="col-12 col-sm-7 p-0">
					<?
					require('komponen/carousel.php'); 
					?>
				</div>
				<div class="col-12 col-sm-5 p-4 d-flex align-items-center">
					<form action="#" method="GET" style="width: 100%;">

						<div class="form-group mb-2">

							<select id="filter" class="form-control" name="filter">
								<option value="">- Pilih Tampilan</option>
								<option value="produk">Produk</option>
								<option value="artikel">Artikel</option>

							</select>
						</div>

						<input type="submit" name="submit" value="FILTER" class="btn btn-warning">

					</form>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- <p class="judul-produk text-center mt-3 mt-sm-5">TERBARU DARI KAMI</p>
				<p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, veniam?</p> -->
				<div class="row mt-3 mt-sm-5 mb-4">
					<?
					$filter = " ";
					require('komponen/terbaru.php');
					?>
				</div>
			</div>
		</div>
		<?
		require('komponen/footer.php');
		?>
	</body>
	</html>