<div class="nav-in-mobile col-12 justify-content-center">

	<div class="col-6 text-end p-3 m-2">
		<?
		$query = "SELECT * FROM artikel WHERE id_artikel<$idArtikel ORDER BY id_artikel DESC LIMIT 1";
		$result = mysqli_query($db,$query);

		foreach ($result as $artikel) {
			$idNavigasi = $artikel['id_artikel'];
		}
		// filter jika data sudah mentok
		if (!isset($idNavigasi)) {
			$linkNav = "style='cursor: no-drop;'";
			$artikel['judul'] = " ";
		}else
		{
			$linkNav = "href='detail.php?id_artikel=$idNavigasi'";
		}
		?>
		<a <?=$linkNav?> class="text-decoration-none p-2">Sebelumnya</a>
		<p class="fw-bolder pt-3"><?
		if (strlen($artikel['judul'])>35) {
			echo substr($artikel['judul'],0,35)."...";

		}else{echo $artikel['judul'];}
		?></p>
	</div>

	<div class="col-6 p-3 m-2">
		<?
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
		<a <?=$linkNav?> class="text-decoration-none p-2">Selanjutnya</a>
		<p class="fw-bolder pt-3"><?
		if (strlen($artikel['judul'])>35) {
			echo substr($artikel['judul'],0,35)."...";

		}else{echo $artikel['judul'];}
		?></p>
	</div>
</div>