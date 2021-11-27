<?
// koneksi ke database
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');
if ($sessionStatus == false) {
	header("Location: index.php");
}


$select = "SELECT * FROM seo";
$data = mysqli_query($db, $select);
$data = mysqli_fetch_assoc($data);

// var_dump($data);
// die();

if (is_null($data)) {
	$data['description'] = "";
	$data['keywords'] = "";
	$data['author'] = "";
	$data['robot_index'] = 1;
	$data['robot_follow'] = 1;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin</title>
	<?
	require('config/styleAdmin.php');
	?>
</head>
<body>
	<div class="d-flex" id="wrapper" style="align-items: flex-start;">
		<? require('komponen/sidebar-admin.php'); ?>
		<!-- Page content wrapper-->
		<div id="page-content-wrapper">
			
			<!-- top nav -->
			<? require('komponen/top-nav-admin.php'); ?>

			<!-- Page content-->
			<div class="container-fluid">
				<!-- konten -->

				<!-- form input -->
				<div id="form" class="SEO">

					<div class="container">

						<div class="row d-flex justify-content-center">

							<div class="seo-form col-12 p-3 p-sm-5 bg-white">
								<h2 align="center" class="mb-5">Form Search Engine Optimation</h2>
								<form action="action-seo.php" method="POST" enctype="multipart/form-data">

									<div class="form-group mb-3">
										<label for="author" class="mb-2">Author</label>
										<input name="author" id="author" class="form-control" type="text" value="<?=$data['author']?>"  required>
									</div>

									<div class="form-group mb-3">
										<label for="description" class="mb-2">Deskripsi</label>
										<textarea name="description" id="description" class="form-control" required><?=$data['description']?></textarea>
									</div>

									<div class="form-group mb-3">
										<label for="keywords" class="mb-2">Keywords / Kata Kunci</label>
										<textarea name="keywords" id="keywords" class="form-control" required><?=$data['keywords']?></textarea>
									</div>

									<div class="d-flex justify-content-center mt-4">
										<div class="form-group mb-3 me-5">
											<label for="robots">Robots Index</label>

											<div class="form-check">
												<input class="form-check-input" type="radio" name="robots_index" id="index" value="1" required <?=($data['robot_index'] ? "checked" : "")?>>
												<label class="form-check-label" for="index">Index</label>
											</div>

											<div class="form-check disabled">
												<input class="form-check-input" type="radio" name="robots_index" id="noindex" value="0" required <?=(!$data['robot_index'] ? "checked" : "")?>>
												<label class="form-check-label" for="noindex">No-Index</label>
											</div>
										</div>

										<div class="form-group mb-3 ms-5">
											<label for="robots">Robots Follow</label>

											<div class="form-check">
												<input class="form-check-input" type="radio" name="robots_follow" id="follow" value="1" required <?=($data['robot_follow'] ? "checked" : "")?>>
												<label class="form-check-label" for="follow">Follow</label>
											</div>

											<div class="form-check disabled">
												<input class="form-check-input" type="radio" name="robots_follow" id="nofollow" value="0" required <?=(!$data['robot_follow'] ? "checked" : "")?>>
												<label class="form-check-label" for="nofollow">No-Follow</label>
											</div>
										</div>
									</div>

									<div class="col-12 d-flex justify-content-center mt-2">
										<input type="submit" name="submit" value="Perbaharui" class="btn text-white col-4 mt-3 mb-3">
										&nbsp
									</div>

								</form>

							</div>

						</div>

					</div>

				</div>
				<!-- end form input -->

			</div>

		</div>
	</div>

	<?require('config/scriptAdmin.php');?>
</body>
</html>