<!-- The Modal -->
<div class="modal fade" id="pesanModal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body">

				<div class="tutup text-end mb-2">
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<div class="row pe-1 ps-1 pe-sm-5 ps-sm-5">
					<h3 align="center" class="mb-5">Tentukan Pesanan Anda</h3>
					<form action="pesan.php" method="POST">

						<div class="form-group mb-3">

							<label for="nama" class="mb-2">Nama Anda</label>

							<input name="nama" id="nama"  class="form-control" type="text" placeholder="Tulis Nama Anda" required>

						</div>

						<div class="form-group mb-3">
							<label for="alamat" class="mb-2">Alamat</label>
							<textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Isikan Alamat Tujuan Pengiriman Produk"></textarea>
						</div>

						<div class="form-group mb-3">
							<label for="pesanan" class="mb-2">Pesanan</label>
							<textarea name="pesanan" class="form-control" id="pesanan" rows="8" placeholder="Tulis Pesanan Anda di Sini"></textarea>
						</div>

						<div class="col-12 d-flex justify-content-center">
							<input type="submit" name="submit" value="PESAN" class="btn text-white bg-success col-12 mt-3 mb-3">
							&nbsp
						</div>

					</form>
				</div>

			</div>

		</div>
	</div>
</div>
