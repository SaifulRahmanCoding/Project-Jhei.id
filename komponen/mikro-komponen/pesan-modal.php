<!-- The Modal -->
<div class="modal fade" id="pesanModal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body">

				<div class="tutup text-end mb-2">
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<div class="row pe-1 ps-1 pe-sm-5 ps-sm-5 mt-3">
					<h4 class="text-center mb-3" style="font-family: Poppins-Bold;">Chat Via Whatsapp</h4>
					<form action="tanya.php" method="POST">

						<div class="form-group mb-3">

							<label for="nama" class="mb-2">Nama Anda</label>

							<input name="nama" id="nama"  class="form-control" type="text" placeholder="Tulis Nama Anda" required>

						</div>

						<div class="form-group mb-3">
							<label for="pertanyaan" class="mb-2">Pertanyaan Anda</label>
							<textarea name="pertanyaan" class="form-control" id="pertanyaan" rows="8" placeholder="Tulis pertanyaan Anda di Sini"></textarea>
						</div>

						<div class="col-12 d-flex justify-content-center">
							<input type="submit" name="submit" value="CHAT PENJUAL" class="btn text-white bg-success col-12 mt-3 mb-3">
							&nbsp
						</div>

					</form>
				</div>

			</div>

		</div>
	</div>
</div>
