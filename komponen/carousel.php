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
        <div class="carousel-item <?=$aktif?>">
          <img src="<?=$carousel['foto']?>" class="d-block w-100" alt="...">
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