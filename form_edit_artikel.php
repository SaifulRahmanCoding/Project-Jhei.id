<?php
// menmapilkan file koneksi
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

// status tidak error
$error = 0;

//mendapatkan data ID
if (isset($_GET['id_artikel'])) {
	$idArtikel = $_GET['id_artikel'];
}
else {
	echo "ID Artikel tidak ditemukan! <a href='artikel.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM artikel WHERE id_artikel = '$idArtikel'";
$result = mysqli_query($db,$query);

foreach($result as $artikel){
	$foto = $artikel['foto'];
	$judulArtikel = $artikel['judul'];
	$konten = $artikel['konten'];
	$jenisPostingan = $artikel['jenis_postingan'];
	$tanggal = $artikel['tanggal'];
	$keywords = $artikel['keywords'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Edit Postingan</title>
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
				<div id="form">

					<div class="container">

						<div class="row d-flex justify-content-center">

							<div class="col-12 p-3 p-sm-5">

								<h2 align="center" class="mb-5">Edit Postingan</h2>

								<form action="action_edit_artikel.php" method="POST" enctype="multipart/form-data">

									<input type="hidden" name="idArtikel" value='<?php echo $idArtikel;?>'>

									<div class="form-group mb-3 text-center">
										<img src="<?php echo $foto?>" class="preview">
									</div>

									<div class="form-group mb-2">

										<label for="foto" class="mb-2">Ganti Foto Postingan</label>

										<input name="foto" id="foto" class="form-control" type="file">

									</div>

									<div class="form-group mb-3">

										<label for="judulArtikel" class="mb-2">Judul Postingan</label>

										<input name="judulArtikel" id="judulArtikel"  class="form-control" type="text" value="<?php echo $judulArtikel?>" placeholder="Judul Artikel" required>

									</div>

									<div class="form-group mb-3">

										<label for="jenisPostingan" class="mb-2">Jenis Postingan</label>

										<select id="jenisPostingan" class="form-control" name="jenisPostingan" required>
											<?php if ($jenisPostingan == "PRODUK") { ?>

												<option value="PRODUK">PRODUK</option>
												<option value="ARTIKEL">ARTIKEL</option>

												<?php } ?>

											<?php if ($jenisPostingan == "ARTIKEL") { ?>
												<option value="ARTIKEL">ARTIKEL</option>
												<option value="PRODUK">PRODUK</option>

												<?php } ?>

										</select>
									</div>

									<div class="form-group mb-3">
										<label for="tgl_posting" class="mb-2">Tanggal Posting : </label>
										<input name="tgl_posting" id="tgl_posting" value="<?php echo date("Y/m/d");?>" class="form-control" type="hidden" required>
										<label class="fw-bolder"><?php echo date("Y/m/d");?></label>
									</div>

									<div class="form-group mb-3">
										<label for="keywords" class="mb-2">Keywords / Kata Kunci Postingan</label>
										<textarea name="keywords" id="keywords" class="form-control" placeholder="contoh : jheina,alami,ektrak jahe,siap seduh" required><?php echo $keywords?></textarea>
									</div>

									<div class="form-group mb-3">
										<label for="konten" class="mb-2">konten</label>
										<textarea name="konten" class="ckeditor form-control" id="kontenku" rows="8" placeholder="isi konten artikel"><?php echo $konten?></textarea>
									</div>

									<div class="col-12 d-flex justify-content-center">
										<input type="submit" name="submit" value="Edit" class="btn text-white col-6 mt-3 mb-3">
										&nbsp
										<a href="admin-postingan.php" class="btn text-white col-6 mt-3 mb-3">Kembali</a>
									</div>

								</form>

							</div>

						</div>

					</div>

				</div>
				<!-- end form input -->

			</div>
		</div>
	</div>
	<?php require('config/scriptAdmin.php');?>
</body>
</html>
<script type="text/javascript">
	CKEDITOR.replace('kontenku', {
		filebrowserUploadMethod:"form",
		filebrowserUploadUrl:"upload.php"
	});
</script>