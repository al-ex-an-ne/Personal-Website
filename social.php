<?php
	$socialLinks = explode("|", file_get_contents("txtfiles/adminSocial.txt"));
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
		margin: auto;
	}
	</style>
</head>
<body>
	<?php include("navbar.php");?>
	<div id="content">
	<img alt="Social media icons" src="images/social_media_icons.jpg" height="688" width="700" usemap="#socialmediamap">
	<map name="socialmediamap" id="socialmediamap">
		<area alt="Facebook" title="Facebook" href=<?=$socialLinks[0]?> target="_blank" coords="6,3,171,170" shape="rect">
		<area alt="Twitter" title="Twitter" href=<?=$socialLinks[1]?> target="_blank" coords="266,8,435,173" shape="rect">
		<area alt="Instagram" title="Instagram" href=<?=$socialLinks[2]?> target="_blank" coords="6,262,173,427" shape="rect">
	</map>
	</div>
</body>
</html>