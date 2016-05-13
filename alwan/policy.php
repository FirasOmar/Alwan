<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css" >
		<?php if($_GET['language_id'] == "en" || !isset($_GET['language_id'])){ ?>
		<link rel="stylesheet" href="css/ltr.css" >
		<?php } ?>
	</head>
	<body>
		<div class = "header" >
		<img src = "images/logo.png" class = "logo" style="float:left;" >
		<?php //include_once('header.php');?>
		</div>
		<div class = "content" >
			<?php 
			
			if($_GET['language_id'] == "ar")
			{
			include("privacy_content.php"); 
			}
			else {
			include("privacy_content_en.php"); 
			}
			
			?>
		</div>
	</body>
</html>