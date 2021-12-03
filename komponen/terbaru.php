<!-- <div class="col-12 col-sm-6 col-lg-6" style="height: 100%;">
	

</div> -->
<?php
// pemanggilan data dari tabel promo
$query= "SELECT * FROM artikel $search $filter ORDER BY id_artikel DESC $limit";
$result=mysqli_query($db, $query);

	// foreach

foreach ($result as $artikel) {

	 // cek foto
	if (!file_exists($artikel['foto'])) {
		$artikel['foto']='upload/default.png';
	}

	if (is_null($artikel['foto'])||empty($artikel['foto'])) {
		$artikel['foto']='upload/default.png';
	}

	?>
	<!--box promo-->
	<div class="col-12 col-sm-4 col-lg-3 text-sm-2 ps-1 ps-sm-2 pe-1 pe-sm-2 mb-4">
		<div class="card mb-2 p-2 p-sm-0" style="border: none;">

			
			<div class="row">
				<div class="col-12 foto-artikel">
					<img src='<?php echo $artikel['foto']?>' class='card-img-top'>
				</div>
				<div class="card-body col-8 col-sm-12 judul-artikel p-0 ps-3 pe-2 ps-sm-3 pe-sm-3">
					<a href="detail.php?id_artikel=<?php echo $artikel['id_artikel']?>" class="more-info text-decoration-none text-dark">
						<h1 class="p-0 mt-1 mt-sm-2">
							<?php
							if (strlen($artikel['judul'])>50) {
								echo substr($artikel['judul'],0,50)."...";

							}else{echo $artikel['judul'];}
							?>
						</h1>
					</a>
				</div>

			</div>
			<?php
			require('komponen/mikro-komponen/fungsi-ubah-tanggal.php');
			?>
			<a class="text-decoration-none text-success p-0 ps-2 pe-2 pb-0 pb-sm-2"><?php echo $artikel['jenis_postingan']?> <span class="text-decoration-none text-dark">| <?php echo "$hari $bulan $tahun"; ?></span></a>
		</div>
	</div>
	<?php } ?>
<!-- end foreach -->