<div id="header">
	<nav class="navbar smart-scroll navbar-expand-lg navbar-light ">

		<div class="container-fluid">

			<!-- navbar brand -->
			<a class="navbar-brand me-4">
				<img src="img/Jhei.id.png" />
				<!-- <p class="mb-0">Jhei-id</p> -->
			</a>

			<!-- navbar toggler -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Togglenavigation">

				<span class="navbar-toggler-icon"></span>

			</button>

			<!-- navbar collapse -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav me-auto">

					<li class="nav-item">
						<a class="nav-link <? if($halaman == 'home'){echo 'active';} ?>" aria-current="page"  href="index.php">BERANDA</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <? if($halaman == 'about'){echo 'active';} ?>" aria-current="page"  href="about.php">TENTANG</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <? if($halaman == 'artikel'){echo 'active';} ?>" aria-current="page"  href="artikel.php">ARTIKEL</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <? if($halaman == 'lokasi'){echo 'active';} ?>" aria-current="page"  href="lokasi.php">LOKASI</a>
					</li>
					<? if ($sessionStatus) : ?>
						<li class="nav-item">
							<a class="nav-link" aria-current="page"  href="pemilik.php">ADMIN</a>
						</li>
					<? else : ?>
						<!-- <li class="nav-item">
							<a class="nav-link" aria-current="page"  href="login.php">LOGIN</a>
						</li> -->
					<? endif; ?>
				</ul>

				<ul class="navbar-nav">
					<li class="nav-item m-auto">
						<!-- form pencarian -->
						<div class="fitur-cari">
							<form action="artikel.php" method="POST" class="d-flex">
								<div>
									<input type="search" name="cari" placeholder="Cari Artikel...">
								</div>

								<button type="submit" name="submit"><i class="fas fa-search"></i></button>
							</form>
						</div>	
					</li>
					
				</ul>
			</div>

		</div>

	</nav>
</div>

