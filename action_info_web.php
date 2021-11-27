<?
// koneksi ke database
require_once('koneksi.php');

require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

$error = 0;

if (isset($_POST['no_wa'])) {
	$no_wa = $_POST['no_wa'];
}
else {
	echo "Error dari no WA";
	$error = 1;
	exit();
} //status error

if (isset($_POST['email'])) {
	$email = $_POST['email'];
}
else {
	echo "Error dari email";
	$error = 1;
	exit();
} //status error

if (isset($_POST['facebook'])) {
	$facebook = $_POST['facebook'];
}
else {
	echo "Error dari facebook";
	$error = 1;
	exit();
} //status error

if (isset($_POST['instagram'])) {
	$instagram = $_POST['instagram'];
}
else {
	echo "Error dari instagram";
	$error = 1;
	exit();
} //status error

if (isset($_POST['alamat'])) {
	$alamat = $_POST['alamat'];
}
else {
	echo "Error dari alamat";
	$error = 1;
	exit();
} //status error

if (isset($_POST['lokasi'])) {
	$lokasi = $_POST['lokasi'];
}
else {
	echo "Error dari lokasi";
	$error = 1;
	exit();
} //status error


if ($error == 1) {
	echo "kesalahan saat input data";
	exit();
}
$select = "SELECT * FROM info_web";
$data = mysqli_query($db, $select);
$data = mysqli_fetch_assoc($data);

if (!is_null($data)) {
	$update = "UPDATE info_web SET whatsapp = '{$no_wa}',email = '{$email}',facebook = '{$facebook}',instagram = '{$instagram}',alamat = '{$alamat}',lokasi = '{$lokasi}'";
	$query = mysqli_query($db, $update);
	

}
else{
	// Menyiapkan Query MySQL untuk dieksekusi
	$insert = "INSERT INTO info_web (whatsapp, email, facebook, instagram, alamat,lokasi) VALUES ('{$no_wa}', '{$email}', '{$facebook}', '{$instagram}', '{$alamat}','{$lokasi}')";
	// mengeksekusi MySQL Query
	$query = mysqli_query($db, $insert);

var_dump($insert);
var_dump($query);
die();

}

// menangani ketika error pada saat eksekusi query
if ($query == false) {
	echo "Error dalam menambah data ke database. <a href='admin-info-web.php'>Kembali</a>";
}
else{
	header("Location: admin-info-web.php");
}
?>

