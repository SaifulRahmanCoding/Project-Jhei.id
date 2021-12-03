<?php
$halaman = 'lokasi';
// koneksi ke database
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

$select = "SELECT * FROM seo";
$data = mysqli_query($db, $select);
$data = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php require_once('komponen/seo.php'); ?>
	<title>Lokasi Usaha</title>
	<?php
	require('config/style.php');
	require('config/script.php');
	?>
</head>
<body>
	<!-- header -->
	<?php
	require('komponen/navbar.php');
	
	require ('komponen/kontak-wa.php');
	require('komponen/mikro-komponen/pesan-modal.php'); 
	?>
	<!-- end header -->
	<div id="lokasi">
		<div class="container">
			<?php
			$query= "SELECT * FROM info_web";
			$result=mysqli_query($db, $query);

			$data = mysqli_fetch_assoc($result);
			$lokasi = $data['lokasi'];
			
			?>
			<iframe src="<?php echo $lokasi?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>

	<?php
	require('komponen/footer.php');
	?>
</body>
</html>