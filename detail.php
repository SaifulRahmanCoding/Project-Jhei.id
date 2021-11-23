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
	$jenisPostingan = $artikel['jenis_postingan'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$judul?></title>
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

	<div id="detail-artikel" class="mt-2 mt-sm-4">

		<div class="container">
			<div class="back">
				<?
				require('komponen/mikro-komponen/fungsi-ubah-tanggal.php');
				?>
				<a href="index.php" class="text-decoration-none text-dark">Home</a> / <a href="artikel.php" class="text-decoration-none text-dark">Postingan</a> / <?
				if (strlen($judul)>40) {
					echo substr($judul,0,40)."...";

				}else{echo $judul;}
				?>
			</div>
			<div class="row mt-3 mb-5">

				<div class="col-12 col-sm-8">

					<div class="col-12 d-flex flex-column justify-content-center p-3 p-sm-4 p-lg-5">
						<div class="konten-berita text-center mb-2">
							<h2 class="judul-artikel-detail mb-3 mb-sm-4"><?=$artikel['judul'];?></h2>
							<a class="text-decoration-none text-dark"><? echo "$hari $bulan $tahun"; ?></a><br><br>
							<img src="<?=$foto?>" alt="">
						</div>
						<p class="isi-konten-postingan"><?=$konten?></p>
					</div>

				</div>

				<? require('komponen/mikro-komponen/navArtikel-in-mobile.php'); ?>

				<div class="col-12 col-sm-4 pt-5 pt-sm-0 mt-3 mt-sm-5" id="sidebar-artikel">


					<h3 class="text-center mb-3 mb-sm-4">Postingan Terkait</h3>
					<?
					$query = "SELECT * FROM artikel WHERE jenis_postingan = '$jenisPostingan' ORDER BY id_artikel DESC LIMIT 0,4";
					$result = mysqli_query($db,$query);
					foreach($result as $artikel){
						?>
						<div class="col-12 ps-1 pe-1">

							<a href="detail.php?id_artikel=<?=$artikel['id_artikel']?>" class="text-decoration-none text-dark">
								<div class="col-12 box-side row pt-2 pb-2 mb-2 ms-0">

									<div class="judul-sidebar-artikel col-7 col-lg-9">
										<p>
											<?
											if (strlen($artikel['judul'])>45) {
												echo substr($artikel['judul'],0,45)."...";

											}else{echo $artikel['judul'];}
											?>
										</p>
									</div>
									<div class="col-5 col-lg-3 gambar-posting"><img src="<?=$artikel['foto'];?>" alt=""></div>
									<div class="col-12">
										<?
										require('komponen/mikro-komponen/fungsi-ubah-tanggal.php');
										?>
										<p class="text-decoration-none text-success p-0 m-0"><?=$artikel['jenis_postingan']?><span class="text-decoration-none text-dark"> | <? echo "$hari $bulan $tahun"; ?></span></p>
									</div>
								</div>
							</a>

						</div>

						<?}?>
					</div>

					<div class="nav768-up d-flex justify-content-center">

						<div class="col-4 text-end p-3 m-2">
							<?
							$query = "SELECT * FROM artikel WHERE id_artikel<$idArtikel ORDER BY id_artikel DESC LIMIT 1";
							$result = mysqli_query($db,$query);

							foreach ($result as $artikel) {
								$idNavigasi = $artikel['id_artikel'];
							}

							// filter jika data sudah mentok
							$batas = $idNavigasi-1;
							if ($idArtikel == $batas) {
								$linkNav = "style='cursor: no-drop;'";
								$artikel['judul'] = " ";

							}else
							{
								$linkNav = "href='detail.php?id_artikel=$idNavigasi'";
							}
							?>
							<a <?=$linkNav?> class="text-decoration-none p-2">Sebelumnya</a>
							<p class="fw-bolder pt-3"><?
							if (strlen($artikel['judul'])>60) {
								echo substr($artikel['judul'],0,60)."...";

							}else{echo $artikel['judul'];}
							?></p>
						</div>

						<div class="col-4 p-3 m-2">
							<?
							$query = "SELECT * FROM artikel WHERE id_artikel>$idArtikel ORDER BY id_artikel ASC LIMIT 1";
							$result = mysqli_query($db,$query);


							foreach ($result as $artikel) {
								$idNavigasi = $artikel['id_artikel'];
							}

							// filter jika data sudah mentok
							$batas = $idNavigasi+1;
							if ($idArtikel == $batas) {
								$linkNav = "style='cursor: no-drop;'";
								$artikel['judul'] = " ";
							}else
							{
								$linkNav = "href='detail.php?id_artikel=$idNavigasi'";
							}
							?>
							<a <?=$linkNav?> class="text-decoration-none p-2">Selanjutnya</a>
							<p class="fw-bolder pt-3"><?
							if (strlen($artikel['judul'])>60) {
								echo substr($artikel['judul'],0,60)."...";

							}else{echo $artikel['judul'];}
							?></p>
						</div>
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