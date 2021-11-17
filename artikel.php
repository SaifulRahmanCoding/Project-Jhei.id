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
			<p class="judul-produk text-center mt-3 mt-sm-5">POSTINGAN</p>
			<p class="text-center">Kami Menawarkan Postingan Berupa Artikel dan Juga Produk, Cek Secara Berkala Agar Tidak Ketinggalan Info Terbaru!</p>
			<div class="row mt-2">
				<h2 class="mt-5"></h2>
				<div class="col-12 mt-2 align-items-center">
					<form action="artikel.php" method="GET" class="d-flex" style="width:100% ;">
						<div class="form-group">

							<select id="filter" class="form-control" name="filter" style="min-width: 250px;">
								<option value="">Tampilkan Semua</option>
								<option value="PRODUK">Produk</option>
								<option value="ARTIKEL">Artikel</option>

							</select>
						</div>

						<input type="submit" name="submit" value="FILTER" class="btn-dark ms-1 ps-3 pe-3 text-white">

					</form>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- <p class="judul-produk text-center mt-3 mt-sm-5">TERBARU DARI KAMI</p>
				<p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, veniam?</p> -->
				<div class="row mt-3 mt-sm-5 mb-4">
					<?
					// filter biar dak muncul error saat load halaman pertama kali
					if (empty($_GET['filter'])) {
						$form_filter = "";
					}
					else{
						$form_filter = $_GET['filter'];

					}

					// filter jika filter tampilan postongan kosong
					if (empty($form_filter)) {
						$kueri = " ";
					}
					else{
						$kueri = "WHERE jenis_postingan='$form_filter'";	
					}
					
					$filter = $kueri;
					$limit = "";
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