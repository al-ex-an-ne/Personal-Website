<?php
	$indexElements = explode("|", file_get_contents("txtfiles/adminIndex.txt"));
	$proStatement = $indexElements[0];
	$biography = $indexElements[1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Alexanne Marcil </title>
	<style>
	body{
		background-color: #C5FAD5;
		margin-top: 0;
	}
	img{
		display:block;
		margin: 0 auto;
	}
	.aboutme{
		font-size:20px;
		font-family: Verdana, sans-serif;
	}
	</style>
</head>
<body>
	<?php include("navbar.php"); ?>
	<br>
	<img src="images/imageofmyself.jpg" alt="Image of myself" width="300" height="400">
	<br>
	<div class="aboutme" style="text-align:center; margin:auto; max-width:900px"> <?=$proStatement?> </div>
	<br>
	<div class="aboutme" style="text-align:justify;"> <?=$biography?> </div>

</body>
</html>