<?php
$query= "SELECT * FROM info_web";
$result=mysqli_query($db, $query);

$data = mysqli_fetch_assoc($result);
$email = $data['email'];
$facebook = $data['facebook'];
$instagram = $data['instagram'];
$alamat = $data['alamat'];
?>
<div id="footer" class="mt-2 mt-sm-5">
	<div class="bungkus pt-3 pb-3">
		<div class="container">
			<div class="row footer-1 d-flex justify-content-center pt-2">

				<div class="col-6 col-lg-4 mt-3 text-white text-center">
					<h5>EMAIL</h5>
					<ul class="contact-us">
						<li> <a href="mailto:jahejhei@gmail.com"><i class="far fa-envelope fa-2x"></i><br><?php echo $email?></a></li>
					</ul>
				</div>

				<div class="col-6 col-lg-4 mt-3 text-white text-center">
					<h5>IKUTI KAMI</h5>
					<ul class="contact-us">
						<li> <a href="<?php echo $facebook?>"><i class="fab fa-facebook fa-2x"></i><br>jhei.id</a></li>
						<li><a href="<?php echo $instagram?>"><i class="fab fa-instagram fa-2x"></i><br>jhei.id</a></li>
					</ul>
				</div>
				
				<div class="col-12 col-lg-4 text-white mt-3 text-center">
					<h5>ALAMAT</h5>
					<ul>
						<li><?php echo $alamat?></li>
					</ul>
					<ul class="mt-3">
						<li><a href="lokasi.php" class="kunjungi text-white p-2">KUNJUNGI</a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<div class="bungkus-2">
		<div class="container">
			<div class="row footer-2 pt-2 pb-2">
				<div class="col-12 text-center text-white">
					<p>© 2021 - Jhei-id</p>
				</div>
			</div>
		</div>
	</div>

</div>
</div>