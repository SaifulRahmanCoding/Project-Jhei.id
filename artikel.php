<?
$halaman = 'artikel';
// koneksi ke database
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

// manggil data dari tabel seo
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

	<title>Artikel Septutar Produk dan Info</title>
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
		<div class="container mb-5">
			<h1 class="judul-produk text-center mt-3 mt-sm-5">ARTIKEL</h1>
			<p class="text-center">Kami Menawarkan Postingan Berupa Artikel dan Juga Produk, Cek Secara Berkala Agar Tidak Ketinggalan Info Terbaru!</p>
			<div class="row mt-2">

				<!-- form filter tampilan -->
				<div class="col-12 col-sm-6 mt-2">
					<form action="artikel.php" method="POST" class="d-flex" style="width:100% ;">
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
			<div class="row mt-4">
				<? if (empty($_POST['cari'])) { 
					echo " ";
				 }
				 else{ ?>
				<div class="hasil-pencarian mb-3">
					<span class="fw-bolder fs-5">
						Hasil Pencarian : "<?=$_POST['cari']?>"
					</span>
				</div>
				<?}?>

				<?
					// filter biar dak muncul error saat load halaman pertama kali
				if (empty($_POST['filter'])) {
					$form_filter = "";
				}
				else{
					$form_filter = $_POST['filter'];

				}

					// filter jika filter tampilan postingan value kosong
				if (empty($form_filter)) {
					$kueri = " ";
				}
				else{
					$kueri = "WHERE jenis_postingan='$form_filter'";	
				}

				$filter = $kueri;
				$limit = "";


				// fitur pencarian
				if (empty($_POST['cari'])) {
					$form_cari = "";
				}
				else{
					$form_cari = $_POST['cari'];
				}

				// filter jika fitur pencarian tidak ada input
				if (empty($form_cari)) {
					$kueriCari = " ";
				}
				else{
					$kueriCari = "WHERE judul LIKE '%$form_cari%'";
				}

				$search = $kueriCari;

				// konten artikel
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