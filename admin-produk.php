<?php
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
	<?php
	require('config/styleAdmin.php');
	?>
</head>
<body>
	<div class="d-flex" id="wrapper" style="align-items: flex-start;">
		<?php require('komponen/sidebar-admin.php'); ?>
		<!-- Page content wrapper-->
		<div id="page-content-wrapper">
			<!-- top nav -->
			<?php require('komponen/top-nav-admin.php'); ?>
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
											<th scope="col" style="min-width: 100px;">HARGA</th>
											<th scope="col" style="min-width: 100px;">BERAT</th>
											<th scope="col" style="min-width: 100px;">STOK</th>
											<th scope="col" style="min-width: 300px;">CAPTION</th>
											<th scope="col">OPSI&nbspPENGEDITAN</th>
										</tr>
									</thead>

									<tbody>
										<?php

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
												<th scope="row"><?php echo $i++?></th>

												<td class="foto-list"><img src="<?php echo $produk['foto']?>" alt="error"></td>

												<td><?php if (strlen($produk['nama'])>35) {
													echo substr($produk['nama'],0,35)."...";

												}else{echo $produk['nama'];}?></td>
												<?php
												$harga_database = $produk['harga'];
												$format_harga = number_format($harga_database,0,",",".")
												?>
												<td>Rp <?php echo $format_harga?></td>
												<td><?php echo $produk['berat']?> gram</td>
												<td><?php echo $produk['stok']?></td>

												<td><?php if (strlen($produk['caption'])>100) {
													echo substr($produk['caption'],0,100)."...";
												}else{echo $produk['caption'];}?></td>

												<td>
													<a class="card-text text-decoration-none text-success fs-6" href="form_edit_produk.php?id_produk=<?php echo $produk['id_produk']?>"><i class="fas fa-edit"></i>
													</a>&nbsp | &nbsp

													<a class="card-text text-decoration-none text-danger fs-6" href="delete_produk.php?id_produk=<?php echo $produk['id_produk']?>" onclick="return confirm_delete()">
														<i class="fa fa-trash-alt"></i>
													</a>
												</td>

											</tr>

										<?php }?>

									</tbody>
								</table>

							</div>

						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
	<?php require('config/scriptAdmin.php');?>
</body>
</html>