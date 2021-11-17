<?
							// pemanggilan data dari tabel promo
$query= "SELECT * FROM artikel $filter ORDER BY id_artikel DESC $limit";
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
	<div class="col-12 col-sm-4 text-sm-2 ps-1 ps-sm-2 pe-1 pe-sm-2">
		<div class="card mb-2 p-2 p-sm-0 shadow-sm" style="border: none;">

			<a href="detail.php?id_artikel=<?=$artikel['id_artikel']?>" class="more-info text-decoration-none text-dark">
				<div class="row">
					<div class="col-12 foto-artikel">
						<img src='<?=$artikel['foto']?>' class='card-img-top'>
					</div>
					<div class="card-body col-8 col-sm-12 judul-artikel p-0 ps-3 pe-2 ps-sm-4 pe-sm-4">
						<p class="p-0 mt-0 mt-sm-2">
							<?
							if (strlen($artikel['judul'])>58) {
								echo substr($artikel['judul'],0,58)."...";

							}else{echo $artikel['judul'];}
							?>
						</p>
					</div>

				</div>
			</a>
			<?
			require('komponen/mikro-komponen/fungsi-ubah-tanggal.php');
			?>
			<a class="text-decoration-none text-success p-0 ps-2 pe-2 pb-0 pb-sm-2"><?=$artikel['jenis_postingan']?> <span class="text-decoration-none text-dark">/ <? echo "$hari $bulan $tahun"; ?></span></a>
		</div>
	</div>
	<?}?>
<!-- end foreach -->