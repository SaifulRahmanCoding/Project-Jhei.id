<?
$halaman = 'artikel';
// koneksi ke database
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if (isset($_GET['id_artikel'])) {
	$idArtikel = $_GET['id_artikel'];
}
else {
	echo "ID Artikel tidak ditemukan! <a href='artikel.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM artikel WHERE id_artikel = '$idArtikel'";
$result = mysqli_query($db,$query);
foreach($result as $artikel){
	$idArtikel = $artikel['id_artikel'];
	$foto = $artikel['foto'];
	$judul = $artikel['judul'];
	$konten = $artikel['konten'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail</title>
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
	$query = "SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 0,5";
	$result = mysqli_query($db,$query);
	?>

	<div id="detail-artikel" class="mt-5">

		<div class="container">
			<div class="back">
				<a href="artikel.php" class="text-decoration-none">Postingan</a> / <?=$artikel['judul']?>
			</div>
			<div class="row mt-3 mb-5">

				<div class="col-12 col-sm-8">

					<div class="col-12 d-flex flex-column justify-content-center p-3 p-sm-4 p-lg-5 shadow" style="border: 1px solid #D4D4D4;">
						<div class="text-center mb-2">
							<h2 class="judul-artikel-detail mb-3 mb-sm-4"><?=$artikel['judul'];?></h2>
							<img src="<?=$foto?>" style="width: 80%;" alt="">
						</div>
						<p><?=$konten?></p>
					</div>

				</div>

				<div class="col-12 col-sm-4 pt-5 pt-sm-0 mt-3 mt-sm-0" id="sidebar-artikel">


					<h3 class="text-center mb-3 mb-sm-2">Artikel Terbaru</h3>
					<?

					foreach($result as $artikel){
						?>
						<div class="col-12 ps-1 pe-1">

							<a href="detail.php?id_artikel=<?=$artikel['id_artikel']?>" class="text-decoration-none text-dark">
								<div class="col-12 box-side row pt-2 pb-2 mb-2 ms-0" style="border: 1px solid #D4D4D4;">

									<div class="judul-sidebar-artikel col-7 col-lg-9">
										<p>
											<?
											if (strlen($artikel['judul'])>45) {
												echo substr($artikel['judul'],0,45)."...";

											}else{echo $artikel['judul'];}
											?>
										</p>
									</div>
									<div class="col-5 col-lg-3"><img src="<?=$artikel['foto'];?>" alt="" style="width: 100%;"></div>
									<div class="col-12">
										<?
										require('komponen/mikro-komponen/fungsi-ubah-tanggal.php');
										?>
										<p class="text-decoration-none text-success p-0 m-0"><?=$artikel['jenis_postingan']?><span class="text-decoration-none text-dark"> / <? echo "$hari $bulan $tahun"; ?></span></p>
									</div>
								</div>
							</a>

						</div>

						<?}?>
					</div>
				</div>


			</div>
			<!-- end container -->
		</div>

		<?
		require('komponen/footer.php');
		?>
	</body>
	</html>