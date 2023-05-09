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
		text-align: left;
	}
	input{
		display:block;
		margin-bottom: 20px;
	}
	textarea{
		height:150px;
		resize: none;
	}
	button{
		display:block; 
		margin-top:10px;
	}
	#content{
		font-size:20px;
		font-family: Verdana, sans-serif;
	}
	</style>
	<script src="contact.js" type="text/javascript">
	</script>
</head>
<body>
	<?php include("navbar.php"); ?>
	<div id="content">
		<label for="name"> Full Name: </label>
		<input type="text" title="Please enter your name." required="required" placeholder="John Doe" id="name"> 
		<label for="email"> E-mail: </label>
		<input type="email" title="Please enter your e-mail." required="required" placeholder="johndoe@email.com" id="email">
		<label for="phone"> Phone Number: </label>
		<input type="text" title="Please enter your phone number." placeholder="123-456-7890" minlength="12" maxlength="12" id="phone"> 
		<textarea cols="50" placeholder="Type your message here" required="required" id="msg"></textarea>
		<input type="submit" onclick="submitContactMsg()">
	</div>
</body>
</html>