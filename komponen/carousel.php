<div id="carouselslide" class="mb-2 mt-2">
  <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">

      <?
              // pemanggilan data dari tabel promo
      $query= "SELECT * FROM carousel ORDER BY id_carousel DESC";
      $result=mysqli_query($db, $query);
              // foreach
      $i = 0;
      foreach ($result as $carousel) {

               // cek foto
        if (!file_exists($carousel['foto'])) {
          $carousel['foto']='upload/default.png';
        }

        if (is_null($carousel['foto'])||empty($carousel['foto'])) {
          $carousel['foto']='upload/default.png';
        }
        $i++;
        if ($i == 1){
          $aktif = "active";
        }
        else{
          $aktif = " ";
        }
        ?>
        <div class="carousel-item <?=$aktif?>" style="position: relative;">
          <img src="<?=$carousel['foto']?>" class="d-block w-100" alt="...">
          <div class="overlay-carousel" style="">
            <div class="bungkus-a d-flex flex-column align-items-center justify-content-center">
              <a href="https://wa.me/<?=$whatsapp?>?text=Halo%20kak%2C%20saya%20pesan%20produk%20dengan%20kode%20promo%20<?=$carousel['ket_carousel']?>.%20apakah%20promo%20masih%20tersedia?" class="text-decoration-none fw-bolder mb-3 mt-5">PESAN</a>
              <p class="text-white">Silahkan Klik Tombol Berikut Untuk Lanjut Ke Pembelian</p>
            </div>
          </div>

        </div>
        <?}?>
        <!-- end foreach -->

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>