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
			<a href="detail.php?id_artikel=<?=$artikel['id_artikel']?>" class="more-info">
				<div class="foto-artikel">
					<img src='<?=$artikel['foto']?>' class='card-img-top'>
				</div>
			</a>
			<div class="card-body judul-artikel p-0 ps-2 pe-2">
				<p class="p-0"><? echo substr($artikel['judul'],0,43),"..."; ?></p>
			</div>
			<!-- The Modal -->
			<div class="modal fade" id="ArtikelModal<?=$artikel['id_artikel']?>">
				<div class="modal-dialog modal-dialog-centered modal-fullscreen">
					<div class="container">
						<div class="modal-content">

							<!-- Modal body -->
							<div class="modal-body">
								<div class="tutup text-end mb-2">
									<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
								</div>
								<div class="row">
									<div class="col-12 judul-artikel text-center mb-2 mt-2 mb-3 mb-sm-5">
										<h1><?=$artikel['judul']?></h1>
									</div>
									<div class="col-12 col-sm-6 col-lg-4 m-auto mb-2"><img src='<?=$artikel['foto']?>' class='card-img-top'></div>
									<div class="col-12 col-sm-10 m-auto"><p><?=$artikel['konten']?></p></div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<? if ($sessionStatus) :?>
				<div class="card-body">
					<p class="text-center mb-0 mt-3">
						<a class="card-text text-decoration-none text-success fs-6" href="form_edit_artikel.php?id_artikel=<?=$artikel['id_artikel']?>"><i class="fas fa-edit"></i>
						</a>&nbsp | &nbsp

						<a class="card-text text-decoration-none text-danger fs-6" href="delete_artikel.php?id_artikel=<?=$artikel['id_artikel']?>">
							<i class="fa fa-trash-alt"></i>
						</a>
					</p>
				</div>
			<?endif;?>
		</div>
	</div>
<?}?>
<!-- end foreach -->