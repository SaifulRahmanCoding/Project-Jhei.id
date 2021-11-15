<?

$pesan = str_replace("\n","%0A",$_POST['pesanan']);
// $pesan2 = str_replace(" ","%20",$pesan);
// $pesan3 = str_replace(",","%2C",$pesan2);
$pesan4 = str_replace("\r","%0A",$pesan);

// echo "pesan = ".$pesan;
// echo "<br>pesan2 = ".$pesan2;
// echo "<br>pesan3 = ".$pesan3;
// echo "<br>pesan4 = ".$pesan4;

header('Location: https://wa.me/6282264120926?text=Hai%2C%20saya%20tertarik%20dengan%20produk%20anda.%0A%0ASaya%20Pesan%20%3A%20%0A'.$pesan4.'%0A%0AData%20Pembeli%20%0ANama%20%3A%20'.$_POST['nama'].'%0AAlamat%20%3A%20'.$_POST['alamat'].'%0A');
?>

