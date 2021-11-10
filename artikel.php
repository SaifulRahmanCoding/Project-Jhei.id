<?
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
			<p class="judul-produk text-center mt-3 mt-sm-5">ARTIKEL</p>
			<p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, veniam?</p>
			<? if ($sessionStatus) : ?>
				<a href="form_artikel.php" class="btn add artikel text-success mt-2 mb-3">Tambah</a>
			<? endif ?>
			<div class="row">
				<!-- colom kiri -->
				<div class="col-12">
					<div class="row">
						<?
							// pemanggilan data dari tabel promo
						$query= "SELECT * FROM artikel ORDER BY id_artikel DESC";
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
									<button type="button" class="btn btn-white p-0" data-bs-toggle="modal" data-bs-target="#myModal<?=$artikel['id_artikel']?>">
										<div class="foto-artikel">
											<img src='<?=$artikel['foto']?>' class='card-img-top'>
										</div>
									</button>
									<!-- The Modal -->
									<div class="modal fade" id="myModal<?=$artikel['id_artikel']?>">
										<div class="modal-dialog modal-dialog-centered modal-fullscreen">
											<div class="modal-content">

												<!-- Modal body -->
												<div class="modal-body">
													<div class="tutup text-end mb-2">
														<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
													</div>
													<div class="row">
														<div class="col-12 judul-artikel text-center mb-2 mt-2 mb-3 mb-sm-5"><h1><?=$artikel['judul']?></h1></div>
														<div class="col-12 col-sm-10 col-lg-6 m-auto mb-2"><img src='<?=$artikel['foto']?>' class='card-img-top'></div>
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
			</div>
		</div>
	</div>
	<?
	require('komponen/footer.php');
	?>
</body>
</html>