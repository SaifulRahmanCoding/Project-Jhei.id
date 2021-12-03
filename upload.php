<?php

if (isset($_FILES['upload']['name'])) {
	$file = $_FILES['upload']['name'];
	$filetemp = $_FILES['upload']['tmp_name'];
	
	move_uploaded_file($filetemp, 'upload/konten/'.$file);

	if (file_exists($file)){
		unlink($file); //hapus foto lama
	}

	$function_number = $_GET['CKEditorFuncNum'];
	$url = 'upload/konten/'.$file;
	$message = '';

	echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number,'$url','$message');</script>";
}

?>