<div id="header">
	<nav class="navbar smart-scroll navbar-expand-lg navbar-light ">

		<div class="container-fluid">

			<!-- navbar brand -->
			<a class="navbar-brand">
				<img src="img/Jhei.id.png" />
				<p class="mb-0">Jhei-id</p>
			</a>

			<!-- navbar toggler -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Togglenavigation">

				<span class="navbar-toggler-icon"></span>

			</button>

			<!-- navbar collapse -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav ms-auto">

					<li class="nav-item">
						<a class="nav-link <? if($halaman == 'home'){echo 'active';} ?>" aria-current="page"  href="index.php">HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <? if($halaman == 'artikel'){echo 'active';} ?>" aria-current="page"  href="artikel.php">POSTINGAN</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <? if($halaman == 'lokasi'){echo 'active';} ?>" aria-current="page"  href="lokasi.php">LOKASI</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <? if($halaman == 'about'){echo 'active';} ?>" aria-current="page"  href="about.php">ABOUT</a>
					</li>
					<? if ($sessionStatus) : ?>
					<li class="nav-item">
						<a class="nav-link" aria-current="page"  href="pemilik.php">ADMIN</a>
					</li>
					<? else : ?>
					<li class="nav-item">
						<a class="nav-link" aria-current="page"  href="login.php">LOGIN</a>
					</li>
					<? endif; ?>
					
				</ul>

			</div>

		</div>

	</nav>
</div>