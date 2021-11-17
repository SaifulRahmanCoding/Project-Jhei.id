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
	<title>Jhei-id</title>
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
			<div class="row mb-5 pb-2 pb-sm-5 d-flex flex-sm-row-reverse">
				<div class="col-12 col-sm-6 col-lg-5 pt-3 pt-lg-0 d-flex justify-content-center">
					<img src="img/teh.png" alt="..." class="col-6 col-sm-12">
				</div>
				<div class="landing-page col-12 col-sm-6 col-lg-7 pt-2 pt-sm-5 ps-2 ps-sm-5 text-center text-sm-start">
					<p class="judul fw-bolder mb-2 mb-sm-4 text-center text-sm-start">Jadikan<a class="text-white ps-2 pe-2 text-decoration-none rounded">Jheina</a>Teman Hangat Anda</p>
					<p class="subjudul pb-0 mb-5 mb-sm-2 pb-sm-4 mb-3 mb-lg-4 text-center text-sm-start" style="font-size: 20px;">Minuman Serbuk Siap Seduh Untuk Menjaga Tubuh Agar Tetap Sehat</p>

					<button type="button" class="btn btn-white p-0" data-bs-toggle="modal" data-bs-target="#pesanModal">
						<a class="tombol-pesan text-decoration-none text-center text-sm-start">HUBUNGI PENJUAL</a>
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="gradient text-center">Untuk Bertanya Tentang Produk Bisa Chat Langsung Via Direct Link WhatsApp Dengan Meng-klik Hubungi Penjual Atau Klik Icon WhatsApp Di Kanan Bawah</div>


	<div id="info-produk" class="pb-2 pt-5" style="background-color: #FFFAF8;">
		<div class="container">
			<p class="judul-promo text-center pt-5">VARIAN PRODUK <a class="text-decoration-none">JHEINA</a></p>
			<p class="text-center">Ekstrak Jahe Serbuk Siap Seduh Siap Menjadi Teman Hangat Anda</p>
			<p class="text-center text-info-produk text-secondary" style="font-size: 14px;">Untuk Melihat Detail Produk, Bisa klik Gambar Produk</p>
			<div class="row d-flex justify-content-center mt-2 mt-sm-5 mb-5">
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

							<button type="button" class="btn btn-white p-0" data-bs-toggle="modal" data-bs-target="#myModal<?=$produk['id_produk']?>">
								<div class="overlay-produk d-flex">
									<a class="text-white text-decoration-none">Detail Produk</a>
								</div>
								<img src="<?=$produk['foto']?>" alt="" class="foto-produk-awal"><br>
							</button>
							<h4 class="mt-4"><?=$produk['nama']?></h4>
							<p class="mt-3 mb-2 pb-0 d-flex justify-content-center">
								<a class="detail-produk text-decoration-none pe-4 ps-4 pt-1 pb-1">BELI</a>
							</p>

							<!-- The Modal -->
							<div class="modal fade" id="myModal<?=$produk['id_produk']?>">
								<div class="modal-dialog modal-dialog-centered modal-md">
									<div class="modal-content">

										<!-- Modal body -->
										<div class="modal-body">

											<div class="tutup text-end mb-2">
												<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
											</div>
											<div class="row pe-1 ps-1 pe-sm-5 ps-sm-5">
												<div class="col-12 text-center mt-3 mb-3"><h3><?=$produk['nama']?></h3></div>
												<div class="col-12 m-auto">
													<img src='<?=$produk['foto']?>' class='card-img-top'>
												</div>

												<!-- tab nav -->
												<ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
													<li class="nav-item ms-auto" role="presentation">
														<button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi<?=$produk['id_produk']?>" type="button" role="tab" aria-controls="deskripsi" aria-selected="true">Deskripsi</button>
													</li>
													<li class="nav-item m-0" role="presentation">
														<button class="nav-link" id="harga-tab" data-bs-toggle="tab" data-bs-target="#harga<?=$produk['id_produk']?>" type="button" role="tab" aria-controls="harga" aria-selected="false">Harga</button>
													</li>
													<li class="nav-item me-auto" role="presentation">
														<button class="nav-link" id="berat-tab" data-bs-toggle="tab" data-bs-target="#berat<?=$produk['id_produk']?>" type="button" role="tab" aria-controls="berat" aria-selected="false">Berat</button>
													</li>
												</ul>

												<div class="tab-content mb-3 mb-sm-5" id="myTabContent">

													<div class="tab-pane fade show active" id="deskripsi<?=$produk['id_produk']?>" role="tabpanel" aria-labelledby="deskripsi-tab">
														<div class="mt-3 text-start text-justify m-auto">
															<?=$produk['caption']?>
														</div>
													</div>

													<div class="tab-pane fade" id="harga<?=$produk['id_produk']?>" role="tabpanel" aria-labelledby="harga-tab">
														<div class="mt-3 text-start text-justify text-center fw-bolder fs-5">
															Rp. 2000000
														</div>
													</div>
													<div class="tab-pane fade" id="berat<?=$produk['id_produk']?>" role="tabpanel" aria-labelledby="berat-tab">
														<div class="mt-3 text-start text-justify text-center fw-bolder fs-5">
															500 gram
														</div>
													</div>
												</div>
												<!-- end tab nav -->

											</div>

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<?}?>
				</div>
			</div>
		</div>
		<!-- end info produk -->

		<!-- carousel produk -->
		<?
		require('komponen/carousel.php'); 
		?>
		<!-- end carousel produk -->

		<!-- isi home artikel-->
		<div id="artikel" class=" pb-4 mt-5 pt-5">

			<div class="container">
				<p class="judul-produk text-center">POSTINGAN</p>
				<p class="text-center">Kami Menawarkan Postingan Berupa Artikel dan Juga Produk, Cek Secara Berkala Agar Tidak Ketinggalan Info Terbaru!</p>
				<!-- batas row -->
				<div class="row mt-5">
					<!-- colom kiri -->
					<div class="col-12">
						<div class="row">
							<?
							$filter = " ";
							$limit = "LIMIT 0,6";
							require('komponen/terbaru.php');
							?>
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