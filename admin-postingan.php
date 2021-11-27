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
				<div id="info-postingan-admin" class="mt-4">
					<div class="container">
						<div class="judul-promo text-center">
							<span>LIST ARTIKEL</span>
						</div>
						<div class="row mb-4 mt-2">
							<div class="col-12">

								<a href="form_artikel.php" class="btn add promo mt-2">Tambah</a>

							</div>
						</div>

						<div class="row">

							<div class="col table-responsive">

								<table class="table table-striped table-bordered responsive-utilities text-center">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">FOTO</th>
											<th scope="col" style="min-width: 150px;">JUDUL</th>
											<th scope="col">JENIS POSTINGAN</th>
											<th scope="col" style="min-width: 100px;">TANGGAL&nbspPOSTING</th>
											<th scope="col">KEYWORDS</th>
											<th scope="col" style="min-width: 300px;">KONTEN</th>
											<th scope="col">OPSI&nbspPENGEDITAN</th>
										</tr>
									</thead>

									<tbody>
										<?

										$query= "SELECT * FROM artikel ORDER BY id_artikel DESC";
										$result=mysqli_query($db, $query);
										// foreach
										$i=1;
										foreach ($result as $artikel) {

				 							// cek foto
											if (!file_exists($artikel['foto'])) {
												$artikel['foto']='upload/default.png';
											}

											if (is_null($artikel['foto'])||empty($artikel['foto'])) {
												$artikel['foto']='upload/default.png';
											}

											?>

											<tr>
												<th scope="row"><?=$i++?></th>
												<td class="foto-list"><img src="<?=$artikel['foto']?>" alt="error"></td>

												<td><?if (strlen($artikel['judul'])>40) {
													echo substr($artikel['judul'],0,40)."...";

												}else{echo $artikel['judul'];}?></td>
												<td><?=$artikel['jenis_postingan']?></td>
												<?
												require('komponen/mikro-komponen/fungsi-ubah-tanggal.php');
												?>
												<td><? echo "$hari $bulan $tahun"; ?></td>
												<td><?=$artikel['keywords']?></td>
												<td><? echo substr($artikel['konten'],0,100)."..."; ?></td>
												<td>
													<a class="card-text text-decoration-none text-success fs-6" href="form_edit_artikel.php?id_artikel=<?=$artikel['id_artikel']?>"><i class="fas fa-edit"></i>
													</a>&nbsp | &nbsp

													<a class="card-text text-decoration-none text-danger fs-6" href="delete_artikel.php?id_artikel=<?=$artikel['id_artikel']?>" onclick="return confirm_delete()">
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