<?
$halaman = 'about';
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
	<? require_once('komponen/seo.php'); ?>
	<title>Tentang Kami</title>
	<?
	require('config/style.php');
	require('config/script.php');
	?>
</head>
<body>
	<!-- header -->
	<div id="header">
		<?
		require('komponen/navbar.php');
		?>
	</div>
	<div id="about" class="mt-4 pt-3 pb-3">
		<div class="container">

			<h1 class="text-center mb-4 judul-produk">Tentang Kami</h1>

			<p class="mb-3" style="text-align: justify;">
				Jheina adalah minuman serbuk siap seduh dengan bahan dasar ekstrak jahe. Jheina ini diproduksi sejak awal pandemi masuk Indonesia. Karena kebutuhan minuman jahe yang cukup tinggi di masa pandemi, akhirnya kami memproduksinya. 
			</p>

			<div class="row mb-2 d-flex flex-column-reverse flex-sm-row">

				<div class="col-kanan col-12 col-sm-6">
					<div class="col-12 ps-0 pe-0 pe-sm-4">


						<p>
							Target market jheina adalah pria dan wanita dewasa di atas 30 tahun karena kebutuhan mereka untuk minuman hangat, segar dan menyehatkan cukup tinggi. 
						</p>
						<p>
							Jheina punya nilai lebih yakni praktis, tinggal seduh dengan air hangat tanpa perlu penambahan apapun lagi, khususnya gula karena memang sudah mengandung gula dan rempah-rempah seperti kayumanis, cengkeh dan serai. Selain itu, karena ekstrak jahe yang diolah maka produk ini tanpa ampas.
						</p>

					</div>
				</div>

				<div class="col-kiri col-12 col-sm-6">
					<img src="img/produk-jahe.jpg" alt="" style="width:100%;">
				</div>
				
			</div>
			<!-- end row -->

		</div>
	</div>
	
	<?
	require('komponen/footer.php');
	?>
</body>
</html>