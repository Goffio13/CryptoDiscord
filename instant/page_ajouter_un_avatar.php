<html>
	<head>
		<title>Test Upload</title>
	</head>
	<body>
		<form method="POST" action="./upload.php" enctype="multipart/form-data">
			<label for="title">Titre de l'image</label>
			<input name="title" type="text"/>
			
			<input name="includedFile" id="includedFile" type="file"/>
			<input type="submit" value="Envoyer"/>
		</form>
	</body>
</html>