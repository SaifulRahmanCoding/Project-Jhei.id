<?php
// koneksi ke database
require_once('koneksi.php');

require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

$error = 0;

if (isset($_POST['author'])) {
	$author = $_POST['author'];
}
else {
	echo "Error dari author";
	$error = 1;
	exit();
} //status error

if (isset($_POST['description'])) {
	$description = $_POST['description'];
}
else {
	echo "Error dari description";
	$error = 1;
	exit();
} //status error

if (isset($_POST['keywords'])) {
	$keywords = $_POST['keywords'];
}
else {
	echo "Error dari keywords";
	$error = 1;
	exit();
} //status error

if (isset($_POST['robots_index'])) {
	$robots_index = $_POST['robots_index'];
}
else {
	echo "Error dari robots_index";
	$error = 1;
	exit();
} //status error

if (isset($_POST['robots_follow'])) {
	$robots_follow = $_POST['robots_follow'];
}
else {
	echo "Error dari robots_follow";
	$error = 1;
	exit();
} //status error


if ($error == 1) {
	echo "kesalahan saat input data";
	exit();
}
$select = "SELECT * FROM seo";
$data = mysqli_query($db, $select);
$data = mysqli_fetch_assoc($data);

if (!is_null($data)) {
	$update = "UPDATE seo SET description = '{$description}',keywords = '{$keywords}',author = '{$author}',robot_follow = {$robots_follow},robot_index = {$robots_index}";
	$query = mysqli_query($db, $update);
	
// var_dump($update);
// var_dump($query);
// die();
}
else{
	// Menyiapkan Query MySQL untuk dieksekusi
	$insert = "INSERT INTO seo (description,keywords,author,robot_follow,robot_index) VALUES ('{$description}','{$keywords}','{$author}',{$robots_follow},{$robots_index})";

	// mengeksekusi MySQL Query
	$query = mysqli_query($db, $insert);

}

// menangani ketika error pada saat eksekusi query
if ($query == false) {
	echo "Error dalam menambah data ke database. <a href='admin-SEO.php'>Kembali</a>";
}
else{
	header("Location: admin-SEO.php");
}
?>

