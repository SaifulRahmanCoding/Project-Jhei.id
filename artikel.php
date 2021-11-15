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
			<p class="judul-produk text-center mt-3 mt-sm-5">TERBARU DARI KAMI</p>
			<p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, veniam?</p>
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