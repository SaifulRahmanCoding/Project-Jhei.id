<?php
// koneksi ke database
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');
if ($sessionStatus == false) {
	header("Location: index.php");
}

$query= "SELECT * FROM info_web";
$result=mysqli_query($db, $query);

$data = mysqli_fetch_assoc($result);

$whatsapp = $data['whatsapp'];
$email = $data['email'];
$facebook = $data['facebook'];
$instagram = $data['instagram'];
$alamat = $data['alamat'];
$lokasi = $data['lokasi'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Info Web</title>
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
				<div id="info-web">
					<div class="form-dashboard-web row mt-3 mt-sm-0 ps-1 pe-1 ps-sm-5 pe-sm-5 p-0 d-flex justify-content-center">

						<div class="col-12 col-sm-10 p-2 pe-3 ps-3 pe-sm-4` ps-sm-4` justify-content-center mt-2 mb-5">
							<h2 class="text-center mt-5">Form Info Website</h2>
							<form action="action_info_web.php" method="POST">

								<div class="d-flex justify-content-center">
									<div class="col-5 form-group mb-3 mt-3 me-3 text-center">
										<label for="no_wa" class="mb-2"><i class="fab fa-whatsapp"></i><br> Nomor Whatsapp</label>
										<input name="no_wa" id="no_wa" class="form-control" type="number" value="<?php echo $whatsapp?>" placeholder="Masukkan no WA" required>
									</div>

									<div class="col-5 form-group mb-3 mt-3 ms-3 text-center">
										<label for="email" class="mb-2"><i class="far fa-envelope"></i><br> Email</label>
										<input name="email" id="email" class="form-control" type="email" value="<?php echo $email?>" placeholder="Masukkan Email" required>
									</div>
								</div>

								<div class="d-flex justify-content-center">
									<div class="col-5 form-group mb-3 mt-3 me-3 text-center">
										<label for="facebook" class="mb-2"><i class="fab fa-facebook"></i><br> Facebook</label>
										<textarea name="facebook" id="facebook" class="form-control" placeholder="Masukkan Link facebook" required><?php echo $facebook?></textarea>
									</div>

									<div class="col-5 form-group mb-3 mt-3 ms-3 text-center">
										<label for="instagram" class="mb-2"><i class="fab fa-instagram"></i><br> Instagram</label>
										<textarea name="instagram" id="instagram" class="form-control" placeholder="Masukkan Link instagram" required><?php echo $instagram?></textarea>
									</div>
								</div>
								<div class="d-flex justify-content-center">
									<div class="col-5 form-group mb-3 mt-3 me-3 text-center">
										<label for="alamat" class="mb-2"><i class="fa fa-map-marker-alt"></i><br> Alamat/ tempat Usaha</label>
										<textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Tempat Usaha" required><?php echo $alamat?></textarea>
									</div>

									<div class="col-5 form-group mb-3 mt-3 ms-3 text-center">
										<label for="lokasi" class="mb-2"><i class="fa fa-map-marked-alt"></i><br> Lokasi Google Maps</label>
										<textarea name="lokasi" id="lokasi" class="form-control" placeholder="masukkan link maps" required><?php echo $lokasi?></textarea>
									</div>
								</div>

								<div class="col-12 d-flex justify-content-center mt-3">
									<input type="submit" name="submit" value="Perbaharui" class="btn text-white col-4 col-sm-3 mt-3 mb-3" style="background-color: coral;">
									&nbsp
								</div>

							</form>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<?php require('config/scriptAdmin.php');?>
</body>
</html>