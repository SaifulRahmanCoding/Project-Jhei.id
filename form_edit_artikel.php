<?
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
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Edit Artikel</title>
	<?
	require('config/style.php');
	require('config/script.php');
	?>
</head>
<body>
	<div id="header">
		<?
		require('komponen/navbar.php');
		?>
	</div>

	<div id="form" class="pt-5">
		
		<div class="container">

			<div class="row d-flex justify-content-center">

				<div class="col-12 p-5">

					<h3 align="center" class="mb-5">Edit Artikel</h3>

					<form action="action_edit_artikel.php" method="POST" enctype="multipart/form-data">

						<input type="hidden" name="idArtikel" value='<? echo $idArtikel;?>'>

						<div class="form-group mb-3 text-center">
							<img src="<?=$foto?>" class="preview">
						</div>

						<div class="form-group mb-2">

							<label for="foto" class="mb-2">Ganti Foto artikel</label>

							<input name="foto" id="foto" class="form-control" type="file">

							<p class="text-danger">*usahakan rasio 1 : 1 atau square</p>

						</div>

						<div class="form-group mb-3">

							<label for="judulArtikel" class="mb-2">Judul artikel</label>

							<input name="judulArtikel" id="judulArtikel"  class="form-control" type="text" value="<?=$judulArtikel?>" placeholder="Judul Artikel" required>

						</div>

						<div class="form-group mb-3">
							<label for="konten" class="mb-2">konten</label>
							<textarea name="konten" class="ckeditor form-control" id="ckeditor" rows="8" placeholder="isi konten artikel"><?=$konten?></textarea>
						</div>

						<div class="col-12 d-flex justify-content-center">
							<input type="submit" name="submit" value="Edit" class="btn text-white col-6 mt-3 mb-3">
							&nbsp
							<a href="artikel.php" class="btn text-white col-6 mt-3 mb-3">Kembali</a>
						</div>

					</form>

				</div>

			</div>

		</div>

	</div>
	<!-- end form input -->
	<?
	require('komponen/footer.php');
	?>
</body>
</html>