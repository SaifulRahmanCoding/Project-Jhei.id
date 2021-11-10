<?
// koneksi ke database
require_once('koneksi.php');

if (isset($_POST['judulArtikel'])) {
	$judulArtikel = $_POST['judulArtikel'];
}
else {
	echo "Error dari judul Artikel";
	exit();
} //status error

if (isset($_POST['konten'])) {
	$konten = $_POST['konten'];
}
else {
	echo "Error dari konten";
	exit();
} //status error

// mengambil data file upload
$files=$_FILES['fotoArtikel'];
$path="upload/artikel/";

// menangani file upload
// name disini nama dari file nya, bukan dari input name
// tmp_name adalah nama sementara
if (!empty($files['name'])) {
	$filepath  =  $path.$files['name'];
	$upload = move_uploaded_file($files['tmp_name'], $filepath);
}
else{
	$filepath = "";
	$upload =  false;
}

// menangani error saat mengupload
if ($upload = false ) {
	$produk['foto'] = 'upload/default.jpg';
}

// Menyiapkan Query MySQL untuk dieksekusi
$query = "INSERT INTO artikel (foto,judul,konten) VALUES ('{$filepath}','{$judulArtikel}','{$konten}')";

// mengeksekusi MySQL Query
$insert = mysqli_query($db, $query);

// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam menambah data ke database. <a href='form_artikel.php.php'>Kembali</a>";
}
else{
	header("Location: index.php");
}
?>

