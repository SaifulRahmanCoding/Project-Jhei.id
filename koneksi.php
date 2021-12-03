<?
$db=new mysqli("localhost","root","","jhei-id");

// cek koneksi
if ($db->connect_error) {
	echo "Gagal menyambungkan ke MySQL : ".$db->connect_error;
	exit();
}
?>