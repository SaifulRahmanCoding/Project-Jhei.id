<!-- Sidebar-->
<div class="border-end" style="position: sticky; top: 0px; max-width: 250px;" id="sidebar-wrapper">

	<div class="sidebar-heading border-bottom text-white text-center pe-0 ps-0 pe-0 pt-2 pb-2">
		<img src="img/jhei.id.png" style="width: 50px;" alt="">
		<p class="m-0">ADMIN - <?=$_SESSION['name']?></p>
	</div>

	<div class="list-group list-group-flush">

		<a class="list-group-item p-3" href="pemilik.php"><i class="fas fa-tachometer-alt"></i>&nbsp&nbsp Dashboard</a>

		<a class="list-group-item p-3" href="admin-akun.php"><i class="fas fa-user-circle"></i>&nbsp&nbsp Akun</a>

		<a class="list-group-item p-3" href="admin-produk.php"><i class="fas fa-shopping-bag"></i>&nbsp&nbsp Produk</a>

		<a class="list-group-item p-3" href="admin-postingan.php"><i class="fas fa-newspaper"></i>&nbsp&nbsp Artikel</a>

		<a class="list-group-item p-3" href="admin-carousel.php"><i class="fas fa-tags"></i>&nbsp&nbsp Promo</a>

		<a class="list-group-item p-3" href="admin-SEO.php"><i class="fas fa-search"></i>&nbsp&nbsp Update SEO</a>

		<a class="list-group-item p-3" href="admin-info-web.php"><i class="fas fa-info"></i>&nbsp&nbsp Update Info Website</a>
		<!-- <a class="list-group-item p-3" href="registration.php"><i class="fas fa-user-circle"></i>&nbsp&nbsp Buat Akun</a> -->

		<a class="list-group-item p-3" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp&nbsp Logout</a>

	</div>

</div>