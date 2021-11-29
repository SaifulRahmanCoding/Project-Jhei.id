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
	<title>Registrasi Akun</title>
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

				<div id="form">

					<div class="container">

						<div class="row d-flex justify-content-center mb-5 mt-3">

							<div class="col col-12 col-sm-10 p-4 p-sm-5 bg-white">

								<div class="label-form mb-1 p-2">
									<h2 class="mb-4" align="center"><i class="fas fa-user-circle"></i><br>Buat Akun</h2>
								</div>

								<form action="action_register.php" method="POST">

									<div class="from-group mb-2">

										<label for="email" class="mb-2">Email</label>
										<input name="email" id="email" type="email" class="form-control" placeholder="xxxx@mail.xxx" required>

									</div>

									<div class="from-group mb-2">

										<label for="name" class="mb-2">Nama</label>
										<input name="name" id="name" type="text" class="form-control mb-2" placeholder="Nama Lengkap" required>

									</div>

									<div class="from-group mb-2">

										<label for="password" class="mb-2">Password</label>
										<input name="password" id="password" type="password" class="form-control mb-2" placeholder="masukkan password" required>

									</div>

									<div class="from-group mb-2">

										<label for="re-password" class="mb-2">Konfirmasi Password</label>
										<input name="re-password" id="re-password" type="password" class="form-control mb-2" placeholder="masukkan ulang password" required>

										<input name="submit" type="submit" value="Buat Akun" class="btn text-white mt-3 mb-3 col-12">

										<div class="label-form col-12 p-2" align="center">
											<a href="login.php">Sudah Memiliki Akun?</a>
										</div>

									</div>

								</form>

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