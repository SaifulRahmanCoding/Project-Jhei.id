<!-- promo -->
<div id="promo" class="mt-3 pt-5">

	<div class="container">

		<p class="judul-promo text-center">PROMO</p>
		<p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ea, cupiditate.</p>
		<!-- strat row -->
		<div id="autoWidth" class="cs-hidden mb-4 mt-2">

			<?php
				// pemanggilan data dari tabel promo
			$query= "SELECT * FROM promo ORDER BY id_promo DESC";
			$result = mysqli_query($db, $query);
				// foreach
			foreach ($result as $promo) {

				 // cek foto
				if (!file_exists($promo['foto'])) {
					$promo['foto']='upload/default.png';
				}

				if (is_null($promo['foto'])||empty($promo['foto'])) {
					$promo['foto']='upload/default.png';
				}

				$harga_normal = $promo['harga_normal'];
				$harga_promo = $promo['harga_promo'];
				$format_normal = number_format($harga_normal,0,",",".");
				$format_promo = number_format($harga_promo,0,",",".");

				$hitung = $promo['harga_normal'] - $promo['harga_promo'];
				$diskon = ($hitung / $promo['harga_normal']) * 100;
				?>
				<!--box promo-->
				<div class="slider">
					<div class="card mb-2 shadow-sm">
						<div class="foto-promo">
							<img src='<?php echo $promo['foto']?>' class='card-img-top'>
							<div class="segitiga"></div>
							<p class="diskon">Diskon<br><?php echo round($diskon,1)?>%</p>
						</div>
						<div class="card-body">
							<p class="card-title fw-bolder">
								<?php
								if (strlen($promo['nama_promo'])>33) {
									echo substr($promo['nama_promo'],0,33)."...";

								}else{echo $promo['nama_promo'];}
								?>
							</p>
							<a class="card-text fw-bolder fs-6 text-decoration-none text-dark">Rp. <?php echo $format_promo?></a><br>
							<a class="card-text text-decoration-line-through text-dark">Rp. <?php echo $format_normal?></a> 
							<p class="mt-3 mb-2 pb-0 d-flex justify-content-center">
								<a href="detail.php?id_promo=<?php echo $promo['id_promo']?>" class="detail text-decoration-none fw-bolder">DETAIL</a>
							</p>
						</div>
					</div>
				</div>
				<!-- end box promo -->
				<?php } ?>
				<!-- end foreach -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>