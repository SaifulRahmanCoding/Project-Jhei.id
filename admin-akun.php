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
	<title>List Akun Admin</title>
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
						<span>AKUN ADMIN</span>
					</div>
					<div class="row mb-4 mt-2">
						<div class="col-12">

							<a href="registration.php" class="btn add promo mt-2">Tambahkan Akun</a>

						</div>
					</div>

					<div class="row">

						<div class="col table-responsive">

							<table class="table table-striped table-bordered responsive-utilities text-center">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">NAMA</th>
										<th scope="col">EMAIL</th>
										<th scope="col">OPSI</th>
									</tr>
								</thead>

								<tbody>
								<?php
								$query= "SELECT * FROM admin ORDER BY id DESC";
								$result=mysqli_query($db, $query);
									// foreach
								$i=1;
								foreach ($result as $akun) {?>
								<tr>
									<th scope="row"><?php echo $i++?></th>
									<td><?php echo $akun['nama']?></td>
									<td><?php echo $akun['email']?></td>
									<td>
										<a class="card-text text-decoration-none text-danger fs-6" href="delete_akun.php?id=<?php echo $akun['id']?>" onclick="return confirm_delete()">
											<i class="fa fa-trash-alt"></i>
										</a>
									</td>
								</tr>

								<?php }

								?>
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