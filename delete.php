<?php

require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

//mendapatkan data produk dari Database
if (isset($_GET['id_carousel'])) {
	$id_carousel = $_GET['id_carousel'];
}
else{ echo "ID tidak ditemukan! <a href='admin-carousel.php'>Kembali</a>";
	exit();
}

// fungsi hapus foto ketika data di delete
$query_foto = "SELECT foto FROM carousel WHERE id_carousel = '$id_carousel'";
$hasil = mysqli_query($db,$query_foto);

$row = mysqli_fetch_assoc($hasil);

if (file_exists($row['foto'])){
	unlink($row['foto']); //hapus foto lama
}


// Query Get data produk
$query = "DELETE FROM carousel WHERE id_carousel = '$id_carousel'";

// eksekusi Query
$result = mysqli_query($db,$query);

if (!$result) {
	exit("Gagal Menghapus Data!");
}

header("Location:admin-carousel.php");

?>