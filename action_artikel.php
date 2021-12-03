<?php
// koneksi ke database
require_once('koneksi.php');
require_once('session_check.php');
if ($sessionStatus == false) {
	header("Location: index.php");
}

if (isset($_POST['judulArtikel'])) {
	$judulArtikel = $_POST['judulArtikel'];
}
else {
	echo "Error dari judul Artikel";
	exit();
} //status error

if (isset($_POST['jenisPostingan'])) {
	$jenisPostingan = $_POST['jenisPostingan'];
}
else {
	echo "Error dari jenisPostingan";
	exit();
} //status error

if (isset($_POST['tgl_posting'])) {
	$tanggal = $_POST['tgl_posting'];
}
else {
	echo "Error dari tanggal";
	exit();
} //status error

if (isset($_POST['konten'])) {
	$konten = $_POST['konten'];
}
else {
	echo "Error dari konten";
	exit();
} //status error

if (isset($_POST['keywords'])) {
	$keywords = $_POST['keywords'];
}
else {
	echo "Error dari keywords";
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
$query = "INSERT INTO artikel (foto,judul,jenis_postingan,konten,tanggal,keywords) VALUES ('{$filepath}','{$judulArtikel}','{$jenisPostingan}','{$konten}','{$tanggal}','{$keywords}')";

// mengeksekusi MySQL Query
$insert = mysqli_query($db, $query);

// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam menambah data ke database. <a href='form_artikel.php'>Kembali</a>";
}
else{
	header("Location: admin-postingan.php");
}
?>

