<html>
	<head>
		<title>Test Upload</title>
		<style>
			div{
				display:flex;
				flex-direction : row;
				flex-wrap : wrap;
			}
			img{
				display: block;
				max-width:230px;
				max-height:95px;
				width: auto;
				height: auto;
				margin : 10px;
				border-radius : 300px;
			}
		</style>
	</head>
	<body>
		<div id="container">
			<?php
				$files = scandir('./avatars/');
				foreach($files as $file) {
					if(str_ends_with($file,"png") || str_ends_with($file,"jpg") || str_ends_with($file,"gif")){
						echo "<img src='./avatars/".$file."'/>";
					}
				}
			?>
		<div>
	</body>
</html>