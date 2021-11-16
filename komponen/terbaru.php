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
	<div class="col-12 col-sm-4 text-sm-2 ps-1 pe-1">
		<div class="card mb-2 p-2 p-sm-0 shadow-sm" style="border: none;">

			<a href="detail.php?id_artikel=<?=$artikel['id_artikel']?>" class="more-info text-decoration-none text-dark">
				<div class="row d-flex flex-row flex-sm-column-reverse">
					<div class="card-body col-8 col-sm-12 judul-artikel p-0 ps-3 pe-2 ps-sm-4 pe-sm-4">
						<p class="p-0">
							<?
							if (strlen($artikel['judul'])>60) {
								echo substr($artikel['judul'],0,60)."...";

							}else{echo $artikel['judul'];}
							?>
						</p>
					</div>
					<div class="col-4 col-sm-12 foto-artikel">
						<img src='<?=$artikel['foto']?>' class='card-img-top'>
					</div>

				</div>
			</a>
			<a class="text-decoration-none text-success fw-bolder p-0 ps-2 pe-2 pb-0 pb-sm-2">PRODUK</a>
		</div>
	</div>
	<?}?>
<!-- end foreach -->