<?
$halaman = 'home';
// koneksi ke database
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jhei.id</title>
	<?
	require('config/style.php');
	?>
</head>
<body>
	<!-- header -->
	<?
	require('komponen/navbar.php');
	
	require ('komponen/kontak-wa.php');
	require('komponen/mikro-komponen/pesan-modal.php');
	?>

	<!-- landing page background -->
	<div id="landingpage">
		<div class="container-fluid">
			<div class="row mb-5 pb-2 pb-sm-5">
				<div class="col-12 col-sm-6 col-lg-5 pt-3 pt-lg-0 d-flex justify-content-center">
					<img src="img/teh.png" alt="..." class="col-6 col-sm-12">
				</div>
				<div class="landing-page col-12 col-sm-6 col-lg-7 pt-2 pt-sm-5 ps-3 ps-sm-5 text-center text-sm-start">
					<p class="judul fw-bolder mb-2 mb-sm-4 text-center text-sm-start">Sedia Macam Jenis Minuman <a class="text-white ps-2 pe-2 text-decoration-none rounded">Tradisional</a></p>
					<p class="subjudul pb-0 mb-sm-2 pb-sm-4 mb-3 mb-lg-4 text-center text-sm-start">Minuman Serbuk Siap Seduh Untuk Menjaga Tubuh Agar Tetap Sehat</p>

					<button type="button" class="btn btn-white p-0" data-bs-toggle="modal" data-bs-target="#pesanModal">
						<a class="tombol-pesan text-decoration-none text-center text-sm-start">PESAN SEKARANG</a>
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="gradient text-center">Untuk Pemesanan Bisa Chat Langsung Via Direct Link WhatsApp Dengan Meng-klik Pesan Sekarang Atau Klik Icon WhatsApp Di Kanan Bawah</div>

	<div id="info-produk" class="pb-2 pt-5">
		<div class="container">
			<p class="judul-promo text-center">MACAM PRODUK KAMI</p>
			<p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ea, cupiditate.</p>
			<? if ($sessionStatus) : ?>
				<a href="form_produk.php" class="btn add produk text-success mt-2 mb-3">Tambah</a>
			<? endif ?>
			<div class="row d-flex justify-content-center mt-2 mt-sm-5">
				<?
							// pemanggilan data dari tabel promo
				$query= "SELECT * FROM produk ORDER BY id_produk";
				$result=mysqli_query($db, $query);
							// foreach
				foreach ($result as $produk) {

							 // cek foto
				if (!file_exists($produk['foto'])) {
					$produk['foto']='upload/default.png';
				}

				if (is_null($produk['foto'])||empty($produk['foto'])) {
					$produk['foto']='upload/default.png';
				}

				?>
				<div class="col-6 col-sm-4 mb-3 mb-lg-5">
					<div class="text-center pe-0 ps-0 pe-sm-1 ps-sm-1 pt-4 pb-2">
						
					<img src="<?=$produk['foto']?>" alt=""><br>
					<h3 class="mt-4"><?=$produk['nama']?></h3>
					<button type="button" class="btn btn-white p-0" data-bs-toggle="modal" data-bs-target="#myModal<?=$produk['id_produk']?>">
					<p class="mt-3 mb-2 pb-0 d-flex justify-content-center">
						<a class="detail-produk text-decoration-none pe-4 ps-4 pt-0 pb-0">DETAIL</a>
					</p>
					</button>

					<!-- The Modal -->
					<div class="modal fade" id="myModal<?=$produk['id_produk']?>">
						<div class="modal-dialog modal-dialog-centered modal-xl">
							<div class="modal-content">

								<!-- Modal body -->
								<div class="modal-body">

									<div class="tutup text-end mb-2">
										<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
									</div>
									<div class="row pe-1 ps-1 pe-sm-5 ps-sm-5">
										<div class="col-12 text-center mt-3 mb-3"><h1><?=$produk['nama']?></h1></div>
										<div class="col-12 col-sm-12 col-lg-6 m-auto">
											<img src='<?=$produk['foto']?>' class='card-img-top'>
										</div>
										<div class="col-12 mt-3 text-start text-justify m-auto"><p><?=$produk['caption']?></p></div>
									</div>

								</div>

							</div>
						</div>
					</div>
					<? if ($sessionStatus) : ?>
					<p class="text-center mb-0 mt-3">
						<a class="card-text text-decoration-none text-success fs-6" href="form_edit_produk.php?id_produk=<?=$produk['id_produk']?>"><i class="fas fa-edit"></i>
						</a>&nbsp | &nbsp

						<a class="card-text text-decoration-none text-danger fs-6" href="delete_produk.php?id_produk=<?=$produk['id_produk']?>">
							<i class="fa fa-trash-alt"></i>
						</a>
					</p>
					<? endif ?>
					</div>
				</div>
				<?}?>
			</div>
		</div>
	</div>
	<!-- end info produk -->

	<? require('komponen/promo-slider.php'); ?>

	<!-- isi home -->
	<div id="artikel" class=" pb-4 mt-2 pt-5">

		<div class="container">
			<p class="judul-produk text-center">ARTIKEL</p>
			<p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, veniam?</p>
			<!-- batas row -->
			<div class="row">
				<!-- colom kiri -->
				<div class="col-12">
					<div class="row">
						<?
							// pemanggilan data dari tabel promo
						$query= "SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 0,6";
						$result=mysqli_query($db, $query);
							// foreach
						foreach ($result as $artikel) {

							 // cek foto
							if (!file_exists($artikel['foto'])) {
								$artikel['foto']='upload/default.png';
							}

							if (is_null($artikel['foto'])||empty($artikel['foto'])) {
								$artikel['foto']='upload/default.png';
							}

						?>
						<!--box promo-->
						<div class="col-4 text-sm-2 ps-1 pe-1">
							<div class="card mb-2" style="border: none;">
								<!-- Button to Open the Modal -->
								<button type="button" class="btn btn-white p-0" data-bs-toggle="modal" data-bs-target="#artikelModal<?=$artikel['id_artikel']?>">
									<div class="foto-artikel">
										<img src='<?=$artikel['foto']?>' class='card-img-top'>
									</div>
								</button>
								<!-- The Modal -->
								<div class="modal fade" id="artikelModal<?=$artikel['id_artikel']?>">
									<div class="modal-dialog modal-dialog-centered modal-fullscreen">
										<div class="modal-content">

											<!-- Modal body -->
											<div class="modal-body">
												<div class="tutup text-end mb-2">
													<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
												</div>
												<div class="row">
													<div class="col-12 judul-artikel text-center mt-2 mb-3 mb-sm-5"><h1><?=$artikel['judul']?></h1></div>
													<div class="col-12 col-sm-10 col-lg-5 m-auto mb-2"><img src='<?=$artikel['foto']?>' class='card-img-top'></div>
													<div class="col-12 pe-2 ps-2 pe-lg-5 ps-lg-5"><p style="text-align: justifyx;"><?=$artikel['konten']?></p></div>
												</div>
											</div>

										</div>
									</div>
								</div>
								<? if ($sessionStatus) :?>
									<div class="card-body">
										<p class="text-center mb-0 mt-3">
											<a class="card-text text-decoration-none text-success fs-6" href="form_edit_artikel.php?id_artikel=<?=$artikel['id_artikel']?>"><i class="fas fa-edit"></i>
											</a>&nbsp | &nbsp

											<a class="card-text text-decoration-none text-danger fs-6" href="delete_artikel.php?id_artikel=<?=$artikel['id_artikel']?>">
												<i class="fa fa-trash-alt"></i>
											</a>
										</p>
									</div>
									<?endif;?>
								</div>
							</div>
						<?}?>
						<!-- end foreach -->
					</div>
				</div>
				<div class="col-12 d-flex justify-content-center pt-5">
					<div class="lain-nya text-center">
						<a href="artikel.php" class="text-decoration-none pe-4 ps-4 pt-2 pb-2">LIHAT LEBIH BANYAK <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div> <!-- end batas row -->
		</div> <!-- end container -->
	</div>
	<?
	require('komponen/footer.php');
	require('config/script.php');
	?>
</body>
</html>