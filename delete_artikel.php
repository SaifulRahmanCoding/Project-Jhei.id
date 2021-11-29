<?

require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

//mendapatkan data artikel dari Database
if (isset($_GET['id_artikel'])) {
	$idArtikel = $_GET['id_artikel'];
}
else{ echo "ID tidak ditemukan! <a href='artikel.php'>Kembali</a>";
	exit();
}

// fungsi hapus foto ketika data di delete
$query_foto = "SELECT foto FROM artikel WHERE id_artikel = '$idArtikel'";
$hasil = mysqli_query($db,$query_foto);

$row = mysqli_fetch_assoc($hasil);

if (file_exists($row['foto'])){
	unlink($row['foto']); //hapus foto lama
}


// Query Get data artikel
$query = "DELETE FROM artikel WHERE id_artikel = '$idArtikel'";

// eksekusi Query
$result = mysqli_query($db,$query);

if (!$result) {
	exit("Gagal Menghapus Data!");
}

header("Location:admin-postingan.php");

?>