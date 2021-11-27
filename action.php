<?
// koneksi ke database
require_once('koneksi.php');
require_once('session_check.php');
if ($sessionStatus == false) {
	header("Location: index.php");
}

// mnegatasi jika terdapat error pada input
if (isset($_POST['ketCarousel'])) {
	$ketCarousel = $_POST['ketCarousel'];
}
else {
	echo "Error dari judul Artikel";
	exit();
} //status error


// mengambil data file upload
$files=$_FILES['foto'];
$path="upload/carousel/";

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
$query = "INSERT INTO carousel (foto,ket_carousel) VALUES ('{$filepath}','{$ketCarousel}')";

// mengeksekusi MySQL Query
$insert = mysqli_query($db, $query);

// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam menambah data ke database. <a href='form_carousel.php'>Kembali</a>";
}
else{
	header("Location: admin-carousel.php");
}

?>