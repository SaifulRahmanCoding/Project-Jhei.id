<?php
// koneksi ke database
require_once('koneksi.php');

require_once('session_check.php');
if ($sessionStatus == false) {
	header("Location: index.php");
}

if (isset($_POST['namaProduk'])) {
	$namaProduk = $_POST['namaProduk'];
}
else {
	echo "Error dari Nama Produk";
	exit();
} //status error

if (isset($_POST['caption'])) {
	$caption = $_POST['caption'];
}
else {
	echo "Error dari caption";
	exit();
} //status error

if (isset($_POST['harga'])) {
	$harga = $_POST['harga'];
}
else {
	echo "Error dari harga";
	exit();
} //status error

if (isset($_POST['berat'])) {
	$berat = $_POST['berat'];
}
else {
	echo "Error dari berat";
	exit();
} //status error

if (isset($_POST['stok'])) {
	$stok = $_POST['stok'];
}
else {
	echo "Error dari stok";
	exit();
} //status error

// mengambil data file upload
$files=$_FILES['fotoProduk'];
$path="upload/produk/";

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
$query = "INSERT INTO produk (foto,nama,caption,harga,berat,stok) VALUES ('{$filepath}','{$namaProduk}','{$caption}','{$harga}','{$berat}','{$stok}')";

// mengeksekusi MySQL Query
$insert = mysqli_query($db, $query);

// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam menambah data ke database. <a href='form_produk.php.php'>Kembali</a>";
}
else{
	header("Location: admin-produk.php");
}
?>
