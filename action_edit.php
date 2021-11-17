<?

require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

// mendapatkan data id barang dari Form
if (isset($_POST['id_carousel'])) {
	$id_carousel = $_POST['id_carousel'];
}
else {
	echo "ID Carousel tidak ditemukan! <a href='admin-carousel.php'>Kembali</a>";
	exit();
}

// Query Get Data barang
$query="SELECT * FROM carousel WHERE id_carousel = '{$id_carousel}'";

// eksekusi Query
$result = mysqli_query($db,$query);

// fetching data
foreach($result as $carousel){
	$fotoLama = $carousel['foto'];
}


// mengambil data file upload
$files = $_FILES['foto'];
$path = "upload/carousel/";

// menangani file upload
if (!empty($files['name'])) {
	$filepath = $path.$files['name'];
	$upload = move_uploaded_file($files['tmp_name'], $filepath);

	if (file_exists($fotoLama)){
		unlink($fotoLama); //hapus foto lama
	}
}
else{
	$filepath = $fotoLama;
	$upload =  false;
}

// menangani error saat mengupload
if ($upload = false ) {
	$barang['foto']='upload/default.png';
}

// menyiapkan Query MySQL untuk dieksekusi

$query="UPDATE carousel SET 
		foto = '{$filepath}' 
		WHERE id_carousel = '{$id_carousel}'";

// mengeksekusi MySQL Query
$insert=mysqli_query($db,$query);

// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam mengubah data. <a href='form_edit.php'>Kembali</a>";
}
else{
	header("Location: carousel.php");
}

?>
