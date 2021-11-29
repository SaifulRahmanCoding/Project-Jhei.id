<?
$db=new mysqli("jongkreatif.com","u5250287_jheina","jheina1234","u5250287_jheina");

// cek koneksi
if ($db->connect_error) {
	echo "Gagal menyambungkan ke MySQL : ".$db->connect_error;
	exit();
}
?>