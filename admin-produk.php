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
	<title>List Produk</title>
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
				<div id="info-produk-admin" class="mt-4">
					<div class="container">
						<div class="judul-promo text-center">
							<span>LIST PRODUK</span>
						</div>
						<div class="row mb-4 mt-2">
							<div class="col-12">

								<a href="form_produk.php" class="btn add promo mt-2">Tambah</a>

							</div>
						</div>

						<div class="row">

							<div class="col table-responsive">

								<table class="table table-striped table-bordered responsive-utilities text-center">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">FOTO</th>
											<th scope="col" style="min-width: 200px;">NAMA</th>
											<th scope="col" style="min-width: 150px;">HARGA</th>
											<th scope="col" style="min-width: 150px;">BERAT</th>
											<th scope="col" style="min-width: 150px;">STOK</th>
											<th scope="col" style="min-width: 300px;">CAPTION</th>
											<th scope="col">OPSI&nbspPENGEDITAN</th>
										</tr>
									</thead>

									<tbody>
										<?

										$query= "SELECT * FROM produk ORDER BY id_produk DESC";
										$result=mysqli_query($db, $query);
										// foreach
										$i=1;
										foreach ($result as $produk) {

				 							// cek foto
											if (!file_exists($produk['foto'])) {
												$produk['foto']='upload/default.png';
											}

											if (is_null($produk['foto'])||empty($produk['foto'])) {
												$produk['foto']='upload/default.png';
											}

											?>

											<tr>
												<th scope="row"><?=$i++?></th>

												<td class="foto-list"><img src="<?=$produk['foto']?>" alt="error"></td>

												<td><?if (strlen($produk['nama'])>35) {
													echo substr($produk['nama'],0,35)."...";

												}else{echo $produk['nama'];}?></td>
												<?
												$harga_database = $produk['harga'];
												$format_harga = number_format($harga_database,0,",",".")
												?>
												<td>Rp <?=$format_harga?></td>
												<td><?=$produk['berat']?> gram</td>
												<td><?=$produk['stok']?></td>

												<td><?if (strlen($produk['caption'])>100) {
													echo substr($produk['caption'],0,100)."...";
												}else{echo $produk['caption'];}?></td>

												<td>
													<a class="card-text text-decoration-none text-success fs-6" href="form_edit_produk.php?id_produk=<?=$produk['id_produk']?>"><i class="fas fa-edit"></i>
													</a>&nbsp | &nbsp

													<a class="card-text text-decoration-none text-danger fs-6" href="delete.php?id_produk=<?=$produk['id_produk']?>" onclick="return confirm_delete()">
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