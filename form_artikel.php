<?
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
	<title>Document</title>
	<?
	require('config/style.php');
	require('config/script.php');
	?>
</head>
<body>
	<?
	require('komponen/navbar.php');
	?>
	<!-- form input -->
	<div id="form" class="pt-5">
		
		<div class="container">

			<div class="row d-flex justify-content-center">

				<div class="col-12 p-5 bg-white">
					<h3 align="center" class="mb-5">Buat Artikel Baru</h3>
					<form action="action_artikel.php" method="POST" enctype="multipart/form-data">

						<div class="form-group mb-2">

							<label for="fotoArtikel" class="mb-2">Foto Sempel Produk</label>

							<input name="fotoArtikel" id="fotoArtikel" class="form-control" type="file">
							<p class="text-danger">*usahakan rasio 1 : 1 atau square</p>

						</div>

						<div class="form-group mb-3">

							<label for="judulArtikel" class="mb-2">Judul Artikel</label>

							<input name="judulArtikel" id="judulArtikel"  class="form-control" type="text" placeholder="Judul" required>

						</div>

						<div class="form-group mb-3">
							<label for="konten" class="mb-2">Konten</label>
							<textarea name="konten" class="ckeditor form-control" id="ckeditor" rows="8" placeholder="isi konten"></textarea>
						</div>

						<div class="col-12 d-flex justify-content-center">
							<input type="submit" name="submit" value="Input" class="btn text-white col-6 mt-3 mb-3">
							&nbsp
							<a href="artikel.php" class="btn text-white col-6 mt-3 mb-3">Kembali</a>
						</div>

					</form>

				</div>

			</div>

		</div>

	</div>
	<!-- end form input -->
</body>
</html>