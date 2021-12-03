<?php
$halaman = 'artikel';
// koneksi ke database
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if (isset($_GET['id_artikel'])) {
	$idArtikel = $_GET['id_artikel'];
}
else {
	echo "ID Artikel tidak ditemukan! <a href='artikel.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM artikel WHERE id_artikel = '$idArtikel'";
$result = mysqli_query($db,$query);
foreach($result as $artikel){
	$idArtikel = $artikel['id_artikel'];
	$foto = $artikel['foto'];
	$judul = $artikel['judul'];
	$konten = $artikel['konten'];
	$jenisPostingan = $artikel['jenis_postingan'];
	$keywords = $artikel['keywords'];
}

$select = "SELECT * FROM seo";
$data = mysqli_query($db, $select);
$data = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php echo $data['description']?>">
	<?php if (empty($keywords)) {?>
	<meta name="keywords" content=" ">
	<?php }else{ ?>
	<meta name="keywords" content="<?php echo $keywords?>">
	<?php }?>
	<meta name="author" content="<?php echo $data['author']?>">
	<meta name="robots" content="<?php echo ($data['robot_index'] ? "index" : "noindex")?>,<?php echo ($data['robot_follow'] ? "follow" : "nofollow")?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $judul?></title>
	<?php
	require('config/style.php');
	require('config/script.php');
	?>
</head>
<body>
	<!-- header -->
	<?php
	require('komponen/navbar.php');
	require ('komponen/kontak-wa.php');
	require('komponen/mikro-komponen/pesan-modal.php');
	?>

	<div id="detail-artikel" class="mt-2 mt-sm-4">

		<div class="container">
			<div class="back">
				<?php
				require('komponen/mikro-komponen/fungsi-ubah-tanggal.php');
				?>
				<a href="index.php" class="text-decoration-none text-dark">Home</a> / <a href="artikel.php" class="text-decoration-none text-dark">Artikel</a> / <?php
				if (strlen($judul)>40) {
					echo substr($judul,0,40)."...";

				}else{echo $judul;}
				?>
			</div>
			<div class="row mt-3 mb-5">

				<div class="col-12 col-sm-8">

					<div class="col-12 d-flex flex-column justify-content-center p-3 p-sm-4 p-lg-5">
						
						<div class="konten-berita text-center mb-2">
							<h2 class="judul-artikel-detail mb-3 mb-sm-4"><?php echo $artikel['judul'];?></h2>
							<a class="text-decoration-none text-dark"><?php echo "$hari $bulan $tahun"; ?></a><br><br>
							<img src="<?php echo $foto?>" alt="">
						</div>
						
						<p class="isi-konten-postingan"><?php echo $konten?></p>

						<p class="tags d-inline mt-3 mt-sm-5">
							Kata Kunci : 
							<?php

							if (empty($keywords)) {
								echo "";
							}
							else{	
								$pecah_keywords = explode(",", $keywords);
								foreach ($pecah_keywords as $tags) {?>
									<span class="me-1 ps-1 pe-1 bg-light rounded text-secondary shadow-sm"><?php echo $tags?></span>	
								<?php }
							}?>
						</p>

					</div>

				</div>

				<?php require('komponen/mikro-komponen/navArtikel-in-mobile.php'); ?>

				<div class="col-12 col-sm-4 pt-5 pt-sm-0 mt-3 mt-sm-5" id="sidebar-artikel">


					<h3 class="text-center mb-3 mb-sm-4">Postingan Terkait</h3>
					<?php

					$pecah_keywords = explode(",", $keywords);

					// hitung jumlah keywords di dalam array
					$jumlah_keywords = count($pecah_keywords);

					// filter jika jumlah keyword lebih dari 4 maka tampilkan 3 kondisi, jika tidak cukup 1
					// jadi tag yang terambil cuma ada 4 nantinya yang di jadikan patokan, jika lebih dari itu tidak dimasukkan
					if ($jumlah_keywords>4) {
						$kunci = "OR keywords LIKE '%$pecah_keywords[1]%' OR keywords LIKE '%$pecah_keywords[2]%' OR keywords LIKE '%$pecah_keywords[3]%' OR keywords LIKE '%$pecah_keywords[4]%'";
					}else{
						$kunci = "OR keywords LIKE '%$pecah_keywords[1]%'";
					}

					// SELECT * FROM `artikel` WHERE keywords LIKE'%jheina%'
					$query = "SELECT * FROM artikel WHERE jenis_postingan='$jenisPostingan' AND keywords LIKE '%$pecah_keywords[0]%' $kunci ORDER BY id_artikel DESC LIMIT 0,4";
					$result = mysqli_query($db,$query);
					$hasil_filter = mysqli_fetch_assoc($result);

					// filter jika hasil dari select diatas judulnya sama dengan yang di tampilkan, maka kosongkan hasil.
					if ($hasil_filter['judul'] == $judul) {
						echo "<p class='text-center'>'tidak ada postingan terkait'<p>";
					}else{
					
					foreach($result as $artikel){
						?>
						<div class="col-12 ps-1 pe-1">

							<a href="detail.php?id_artikel=<?php echo $artikel['id_artikel']?>" class="text-decoration-none text-dark">
								<div class="col-12 box-side row pt-2 pb-2 mb-2 ms-0">

									<div class="judul-sidebar-artikel col-7 col-lg-9">
										<p>
											<?php
											if (strlen($artikel['judul'])>45) {
												echo substr($artikel['judul'],0,45)."...";

											}else{echo $artikel['judul'];}
											?>
										</p>
									</div>
									<div class="col-5 col-lg-3 gambar-posting"><img src="<?php echo $artikel['foto'];?>" alt=""></div>
									<div class="col-12">
										<?php
										require('komponen/mikro-komponen/fungsi-ubah-tanggal.php');
										?>
										<p class="text-decoration-none text-success p-0 m-0"><?php echo $artikel['jenis_postingan']?><span class="text-decoration-none text-dark"> | <?php echo "$hari $bulan $tahun"; ?></span></p>
									</div>
								</div>
							</a>

						</div>

						<?php }}?>
					</div>

					<div class="col-12 col-sm-8">
					<div class="nav768-up d-flex justify-content-center">

						<div class="col-6 col-sm-5 col-lg-6 text-end ps-0 p-3 m-2">
							<?php
							$query = "SELECT * FROM artikel WHERE id_artikel<$idArtikel ORDER BY id_artikel DESC LIMIT 1";
							$result = mysqli_query($db,$query);

							foreach ($result as $artikel) {
								$idNavigasi = $artikel['id_artikel'];
							}

							// filter jika data sudah mentok
							$batas = $idNavigasi-1;
							if ($idArtikel == $batas) {
								$linkNav = "style='cursor: no-drop;'";
								$artikel['judul'] = " ";

							}else
							{
								$linkNav = "href='detail.php?id_artikel=$idNavigasi'";
							}
							?>
							<p>Artikel Sebelumnya</p>
							<a <?php echo $linkNav?> class="text-decoration-none"><?php
							if (strlen($artikel['judul'])>40) {
								echo substr($artikel['judul'],0,40)."...";

							}else{echo $artikel['judul'];}
							?></a>
						</div>

						<div class="col-6 col-sm-5 col-lg-6 p-3 m-2 pe-0">
							<?php
							$query = "SELECT * FROM artikel WHERE id_artikel>$idArtikel ORDER BY id_artikel ASC LIMIT 1";
							$result = mysqli_query($db,$query);


							foreach ($result as $artikel) {
								$idNavigasi = $artikel['id_artikel'];
							}

							// filter jika data sudah mentok
							$batas = $idNavigasi+1;
							if ($idArtikel == $batas) {
								$linkNav = "style='cursor: no-drop;'";
								$artikel['judul'] = " ";
							}else
							{
								$linkNav = "href='detail.php?id_artikel=$idNavigasi'";
							}
							?>
							<p>Artikel Selanjutnya</p>
							<a <?php echo $linkNav?> class="text-decoration-none"><?php
							if (strlen($artikel['judul'])>40) {
								echo substr($artikel['judul'],0,40)."...";

							}else{echo $artikel['judul'];}
							?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end container -->
	</div>

	<?php
	require('komponen/footer.php');
	?>
</body>
</html>