<?
$halaman = 'lokasi';
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
	<title>Lokasi</title>
	<?
	require('config/style.php');
	require('config/script.php');
	?>
</head>
<body>
	<!-- header -->
	<?
	require('komponen/navbar.php');
	
	require ('komponen/kontak-wa.php');
	require('komponen/mikro-komponen/pesan-modal.php'); 
	?>
	<!-- end header -->
	<div id="lokasi">
		<div class="container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.7888200916645!2d113.9484001139741!3d-7.705796778461482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7275e891056ed%3A0x8ac2e19e40caacb2!2sJhei.id!5e0!3m2!1sid!2sid!4v1637171385621!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>

	<?
	require('komponen/footer.php');
	?>
</body>
</html>