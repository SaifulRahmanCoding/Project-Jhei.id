<?
							// pemanggilan data dari tabel promo
$query= "SELECT * FROM artikel ORDER BY id_artikel DESC $filter";
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
	<div class="col-6 col-sm-3 text-sm-2 ps-1 pe-1">
		<div class="card mb-2 shadow-sm" style="border: none;">

			<a href="detail.php?id_artikel=<?=$artikel['id_artikel']?>" class="more-info text-decoration-none text-dark">
				
				<div class="foto-artikel">
					<img src='<?=$artikel['foto']?>' class='card-img-top'>
				</div>

				<div class="card-body judul-artikel p-0 ps-2 pe-2">
					<p class="p-0"><? echo substr($artikel['judul'],0,43),"..."; ?></p>
				</div>

			</a>
		</div>
	</div>
<?}?>
<!-- end foreach -->