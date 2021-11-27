<?
// koneksi ke database
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');
if ($sessionStatus == false) {
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>List Postingan</title>
	<?
	require('config/styleAdmin.php');
	?>
</head>
<body>
	<div class="d-flex" id="wrapper" style="align-items: flex-start;">
		<? require('komponen/sidebar-admin.php'); ?>
		<!-- Page content wrapper-->
		<div id="page-content-wrapper">
			<!-- top nav -->
			<? require('komponen/top-nav-admin.php'); ?>
			<!-- Page content-->
			<div class="container-fluid">
				<!-- konten -->
				<div id="carousel-admin" class="mt-4">
					<div class="container">
						<div class="judul-promo text-center">
							<span>LIST PROMO</span>
						</div>
						<div class="row mb-4 mt-2">
							<div class="col-12">

								<a href="form_carousel.php" class="btn add promo mt-2">Tambah</a>

							</div>
						</div>

						<div class="row">

							<div class="col table-responsive">

								<table class="table table-striped table-bordered responsive-utilities text-center">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">FOTO</th>
											<th scope="col">KODE PROMO/ VOUCHER</th>
											<th scope="col">OPSI&nbspPENGEDITAN</th>
										</tr>
									</thead>

									<tbody>
										<?

										$query= "SELECT * FROM carousel ORDER BY id_carousel DESC";
										$result=mysqli_query($db, $query);
										// foreach
										$i=1;
										foreach ($result as $carousel) {

				 							// cek foto
											if (!file_exists($carousel['foto'])) {
												$carousel['foto']='upload/default.png';
											}

											if (is_null($carousel['foto'])||empty($carousel['foto'])) {
												$carousel['foto']='upload/default.png';
											}

											?>

											<tr>

												<th scope="row"><?=$i++?></th>

												<td class="foto-list"><img src="<?=$carousel['foto']?>" alt="error"></td>

												<td><?=$carousel['ket_carousel']?></td>

												<td>
													<a class="card-text text-decoration-none text-success fs-6" href="form_edit.php?id_carousel=<?=$carousel['id_carousel']?>"><i class="fas fa-edit"></i>
													</a>&nbsp | &nbsp

													<a class="card-text text-decoration-none text-danger fs-6" href="delete.php?id_carousel=<?=$carousel['id_carousel']?>" onclick="return confirm_delete()">
														<i class="fa fa-trash-alt"></i>
													</a>

												</td>
												
											</tr>

											<?}?>

										</tbody>
									</table>

								</div>

						</div>
					</div>

				</div>
			</div>
			
		</div>
	</div>
	<?require('config/scriptAdmin.php');?>
</body>
</html>