<!DOCTYPE html>
<html lang="en">
<head>
	<title> Alexanne Marcil </title>
	<style>
	body{
		background-color: #C5FAD5;
		margin-top: 0;
	}
	#content{
		padding: 10px;
		position: absolute;
		top: 50%;
		transform: translate(0, -50%);
		text-align:justify;
		font-size:20px;
		font-family: Verdana, sans-serif;
	}
	input{
		display:block;
		margin-bottom: 20px;
	}
	#button{
		width:100%;
		text-align:center;
	}
	</style>
	<script src="admin.js" type="text/javascript">
	</script>
</head>
<body>
	<?php include("navbar.php"); ?>
	<div id="content">
		<label for="username"> Username: </label>
		<input type="text" title="Please enter your username." required="required" placeholder="johndoe123" id="username">
		<label for="password"> Password: </label>
		<input type="password" title="Please enter your password." required="required" placeholder="********" id="password">
		<div id="button">
			<input type="button" value="Login" id="Login" onclick="processLogin()" style="display: inline;">
		</div>
	</div>
</body>
</html>