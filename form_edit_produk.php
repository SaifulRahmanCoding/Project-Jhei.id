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
if (isset($_GET['id_produk'])) {
	$idProduk = $_GET['id_produk'];
}
else {
	echo "ID Produk tidak ditemukan! <a href='produk.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM produk WHERE id_produk = '$idProduk'";
$result = mysqli_query($db,$query);

foreach($result as $produk){
	$foto = $produk['foto'];
	$namaProduk = $produk['nama'];
	$caption = $produk['caption'];
	$harga = $produk['harga'];
	$berat = $produk['berat'];
	$stok = $produk['stok'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Edit Produk</title>
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

							<div class="col-12 p-3 p-sm-5 bg-white">

								<h2 align="center" class="mb-5">Edit Produk</h2>

								<form action="action_edit_produk.php" method="POST" enctype="multipart/form-data">

									<input type="hidden" name="idProduk" value='<?php echo $idProduk;?>'>

									<div class="form-group mb-3 text-center">
										<img src="<?php echo $foto?>" class="preview">
									</div>

									<div class="form-group mb-2">

										<label for="foto" class="mb-2">Ganti Foto Produk</label>

										<input name="foto" id="foto" class="form-control" type="file">

										<p class="text-danger">*usahakan rasio 1 : 1 atau square</p>

									</div>

									<div class="form-group mb-3">

										<label for="namaProduk" class="mb-2">Nama Produk</label>

										<input name="namaProduk" id="namaProduk"  class="form-control" type="text" value="<?php echo $namaProduk?>" placeholder="Nama Produk" required>

									</div>

									<div class="form-group mb-3">

										<label for="harga" class="mb-2">Harga ( Rp )</label>

										<input name="harga" id="harga"  class="form-control" type="number" value="<?php echo $harga?>" required>

									</div>

									<div class="form-group mb-3">

										<label for="berat" class="mb-2">Berat ( gram ) </label>

										<input name="berat" id="berat"  class="form-control" type="number" value="<?php echo $berat?>" required>

									</div>

									<div class="form-group mb-3">

										<label for="stok" class="mb-2">Stok</label>

										<select id="stok" class="form-control" name="stok" required>

											<?php if ($stok == "") {?>

												<option value="READY STOK">READY STOK</option>
												<option value="PRE ORDER">PRE ORDER</option>
												<option value="KOSONG">KOSONG</option>

											<?php } ?>

											<?php if ($stok == "READY STOK") {?>

												<option value="READY STOK">READY STOK</option>
												<option value="PRE ORDER">PRE ORDER</option>
												<option value="KOSONG">KOSONG</option>

											<?php } ?>

											<?php if ($stok == "PRE ORDER") {?>

												<option value="PRE ORDER">PRE ORDER</option>
												<option value="READY STOK">READY STOK</option>
												<option value="KOSONG">KOSONG</option>

											<?php } ?>

											<?php if ($stok == "KOSONG") {?>

												<option value="KOSONG">KOSONG</option>
												<option value="READY STOK">READY STOK</option>
												<option value="PRE ORDER">PRE ORDER</option>

											<?php } ?>


										</select>
									</div>

									<div class="form-group mb-3">
										<label for="caption" class="mb-2">Caption</label>
										<textarea name="caption" class="ckeditor form-control" id="kontenku" rows="8" placeholder="isi caption produk"><?php echo $caption?></textarea>
									</div>

									<div class="col-12 d-flex justify-content-center">
										<input type="submit" name="submit" value="Edit" class="btn text-white col-6 mt-3 mb-3">
										&nbsp
										<a href="admin-produk.php" class="btn text-white col-6 mt-3 mb-3">Kembali</a>
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