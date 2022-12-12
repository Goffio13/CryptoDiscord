
<?php
	$target_dir = "avatars/";
	$target_file = $target_dir . $_POST["title"] . "_" . basename($_FILES["includedFile"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	  $check = getimagesize($_FILES["includedFile"]["tmp_name"]);
	  if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
	  } else {
		echo "File is not an image.";
		$uploadOk = 0;
	  }
	}
	if($uploadOk == 1){
		move_uploaded_file($_FILES["includedFile"]["tmp_name"], $target_file);
	}
	header("location:./result.php");
?>
