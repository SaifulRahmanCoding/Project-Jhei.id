<?

require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

// mendapatkan data id barang dari Form
if (isset($_POST['idArtikel'])) {
	$idArtikel = $_POST['idArtikel'];
}
else {
	echo "ID artikel tidak ditemukan! <a href='form_edit_artikel.php'>Kembali</a>";
	exit();
}

// Query Get Data barang
$query="SELECT * FROM artikel WHERE id_artikel = '{$idArtikel}'";

// eksekusi Query
$result = mysqli_query($db,$query);

// fetching data
foreach($result as $artikel){
	$fotoLama = $artikel['foto'];
	$judulArtikel = $artikel['judul'];
	$konten = $artikel['konten'];
	$jenisPostingan = $artikel['jenis_postingan'];
	$tanggal = $artikel['tanggal'];
}

// Memvalidasi inputan
if (isset($_POST['konten'])) {
	$konten = $_POST['konten'];
}
else {
	echo "Error konten";
	exit();
} //status error

if (isset($_POST['judulArtikel'])) {
	$judulArtikel = $_POST['judulArtikel'];
}
else {
	echo "Error judul artikel";
	exit();
} //status error

if (isset($_POST['jenisPostingan'])) {
	$jenisPostingan = $_POST['jenisPostingan'];
}
else {
	echo "Error jenis postingan";
	exit();
} //status error

if (isset($_POST['tgl_posting'])) {
	$tanggal = $_POST['tgl_posting'];
}
else {
	echo "Error tanggal";
	exit();
} //status error

// mengambil data file upload
$files = $_FILES['foto'];
$path = "upload/artikel/";

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

$query="UPDATE artikel SET 
		foto = '{$filepath}',
		judul = '{$judulArtikel}', 
		konten = '{$konten}',
		jenis_postingan = '{$jenisPostingan}',
		tanggal = '{$tanggal}'
		WHERE id_artikel = '{$idArtikel}'";

// mengeksekusi MySQL Query
$insert=mysqli_query($db,$query);

// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam mengubah data. <a href='form_edit_artikel.php'>Kembali</a>";
}
else{
	header("Location: admin-postingan.php");
}

?>
