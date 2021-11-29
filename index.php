<?
$halaman = 'home';
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<? require_once('komponen/seo.php'); ?>
	<title>Jheina Siap Seduh</title>
	<? require('config/style.php'); ?>
</head>
<body>
	<!-- header -->
	<?
	require('komponen/navbar.php');
	
	require ('komponen/kontak-wa.php');
	require('komponen/mikro-komponen/pesan-modal.php');

	$query= "SELECT * FROM info_web";
	$result=mysqli_query($db, $query);

	$data = mysqli_fetch_assoc($result);
	$whatsapp = $data['whatsapp'];
	?>

	<!-- landing page background -->
	<div id="landingpage">
		<div class="container-fluid">
			<div class="row mb-5 pb-2 pb-sm-5 d-flex flex-sm-row-reverse">
				<div class="col-12 col-sm-6 col-lg-5 pt-3 pt-lg-0 d-flex justify-content-center">
					<img src="img/teh.png" alt="..." class="col-6 col-sm-12">
				</div>
				<div class="landing-page col-12 col-sm-6 col-lg-7 pt-2 pt-sm-5 ps-2 ps-sm-5 text-center text-sm-start">
					<h1 class="judul fw-bolder mb-2 mb-sm-4 text-center text-sm-start">Jadikan<a class="text-white ps-2 pe-2 text-decoration-none rounded">Jheina</a>Teman Hangat Anda</h1>
					<p class="subjudul pb-0 mb-5 mb-sm-2 pb-sm-4 mb-3 mb-lg-4 text-center text-sm-start" style="font-size: 20px;">Minuman Serbuk Siap Seduh Untuk Menjaga Tubuh Agar Tetap Sehat</p>

					<button type="button" class="btn btn-white p-0" data-bs-toggle="modal" data-bs-target="#pesanModal">
						<a class="tombol-pesan text-decoration-none text-center text-sm-start">HUBUNGI PENJUAL</a>
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="gradient text-center">Untuk Bertanya Tentang Produk Bisa Chat Langsung Via Direct Link WhatsApp Dengan Meng-klik Hubungi Penjual Atau Klik Icon WhatsApp Di Kanan Bawah</div>

	<div id="carousel-index" class="mt-5 mb-5">
		<div class="container-carousel">
			<?
			require('komponen/carousel.php'); 
			?>
		</div>
	</div>

	<div id="info-produk" class="pb-2 pt-5" style="background-color: #FFFAF8;">
		<div class="container">
			<h1 class="judul-promo text-center pt-5">VARIAN PRODUK <a class="text-decoration-none">JHEINA</a></h1>
			<p class="text-center">Ekstrak Jahe Serbuk Siap Seduh Siap Menjadi Teman Hangat Anda</p>
			<p class="text-center text-info-produk text-secondary" style="font-size: 14px;">Untuk Melihat Detail Produk, Bisa klik Gambar Produk</p>
			<div class="row d-flex justify-content-center mt-2 mt-sm-5 mb-5">
				<?
							// pemanggilan data dari tabel promo
				$query= "SELECT * FROM produk ORDER BY id_produk DESC";
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
					<div class="col-6 col-sm-4 col-lg-3 mb-3 mb-lg-5">
						<div class="text-center pe-0 ps-0 pe-sm-1 ps-sm-1 pt-4 pb-2">

							<button type="button" class="btn btn-white p-0" data-bs-toggle="modal" data-bs-target="#myModal<?=$produk['id_produk']?>">
								<div class="overlay-produk d-flex">
									<a class="detail-overlay text-white text-decoration-none">Detail Produk</a>
								</div>
								<img src="<?=$produk['foto']?>" alt="" class="foto-produk-awal"><br>
							</button>
							<?
							$titleProduk = explode(" ",$produk['nama']);
							
							// filter jika index ke 0 equal dengan string Jheina, jika tidak maka kosongkan
							if ($titleProduk[0] == "Jheina") {
								$jheina = $titleProduk[0];
							}else{
								$jheina = "";
							}

							$titleProduk2 = explode("Jheina",$produk['nama']);
							
							//filter cek index ke 1 ada atau tidak 
							if (!isset($titleProduk2[1])) {
								$jenis_nya = $titleProduk2[0];
							}else{
							$jenis_nya = $titleProduk2[1];}

							// filter jika $tittleProduk2[1] nilai nya kosong, diganti ke index ke 0
							if ($jenis_nya == "") {
								$jenis_nya = $titleProduk2[0];
							}else
							{
								// filter jika tittleProduk index 1 kosong
								if (empty($titleProduk2[1])) {
									$jenis_nya = $titleProduk2[0];
								}else{
									$jenis_nya = $titleProduk2[1];
								}
							}

							?>
							<h1 class="mt-4">
								<a class='text-decoration-none'><?=$jheina?></a><?=$jenis_nya?>
							</h1>
							<?
							$harga_database = $produk['harga'];
							$format_harga = number_format($harga_database,0,",",".");
							?>
							<p class="mb-0" style="font-size: 18px; font-family: system-ui;">Rp <?=$format_harga?></p>
							<p class="mt-3 mb-2 pb-0 d-flex justify-content-center">
								<a href="https://wa.me/<?=$whatsapp?>?text=Hai%20Kak%2C%20Saya%20pesan%20produk%20<?=$produk['nama']?>%20<?=$produk['berat']?>%20gr%20sebanyak%20[isi%20mau beli berapa]" class="detail-produk text-decoration-none pe-4 ps-4 pt-1 pb-1">PESAN</a>
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
												<div class="col-12 text-center mt-3 mb-3">
													<h3><?=$produk['nama']?></h3>
												</div>
												<div class="col-12 m-auto">
													<img src='<?=$produk['foto']?>' class='card-img-top'>
												</div>

												<!-- tab nav -->
												<ul class="nav nav-tabs mt-5" id="myTab" role="tablist">

													<li class="nav-item ms-auto" role="presentation">
														<button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi<?=$produk['id_produk']?>" type="button" role="tab" aria-controls="deskripsi" aria-selected="true">Deskripsi</button>
													</li>

													<li class="nav-item me-auto" role="presentation">
														<button class="nav-link" id="ket-produk-tab" data-bs-toggle="tab" data-bs-target="#ket-produk<?=$produk['id_produk']?>" type="button" role="tab" aria-controls="ket-produk" aria-selected="false">Ket. Produk</button>
													</li>

												</ul>

												<div class="tab-content mb-3 mb-sm-5" id="myTabContent">

													<div class="tab-pane fade show active" id="deskripsi<?=$produk['id_produk']?>" role="tabpanel" aria-labelledby="deskripsi-tab">
														<div class="mt-3 text-start text-justify m-auto">
															<?=$produk['caption']?>
														</div>
													</div>

													<div class="tab-pane fade" id="ket-produk<?=$produk['id_produk']?>" role="tabpanel" aria-labelledby="ket-produk-tab">
														<div class="ket row mt-3 text-start text-justify text-center">
															<div class="col-4">
																<?
																	$harga_database = $produk['harga'];
																	$format_harga = number_format($harga_database,0,",",".");
																?>
																<p> Harga  </p>
																<span class="fw-bolder pb-5">Rp <?=$format_harga?></span>
																
															</div>
															<div class="col-4">
																<p> Berat </p>
																<span class="fw-bolder pb-5"><?=$produk['berat']?> gram</span>
															</div>

															<div class="col-4">
																<p> Stok </p>
																<span class="fw-bolder pb-5"><?=$produk['stok']?></span>
															</div>
															
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
	<div class="layout-carousel">
		<div class="container">

		</div>
	</div>
	<!-- end carousel produk -->

	<!-- isi home artikel-->
	<div id="artikel" class=" pb-4 mt-5 pt-5">

		<div class="container">
			<h1 class="judul-produk text-center">ARTIKEL</h1>
			<p class="text-center mb-5">Kami Menawarkan Postingan Berupa Artikel dan Juga Produk, Cek Secara Berkala Agar Tidak Ketinggalan Info Terbaru!</p>

			<!-- batas row -->
			<div class="row">
				<!-- colom kiri -->
				<div class="col-12">
					<div class="row">
						<?
						$filter = " ";
						$limit = "LIMIT 0,8";
						$search = " ";
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