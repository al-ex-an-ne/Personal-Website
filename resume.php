<?php
	$resumeElements= explode("|", file_get_contents("txtfiles/adminResume.txt"));
	$education = explode(";", $resumeElements[0]);
	$skills = explode("\n", $resumeElements[1]);
	$awards = explode("\n", $resumeElements[2]);
	$workExp = explode(";", $resumeElements[3]);
	$referees = explode(";", $resumeElements[4]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Alexanne Marcil </title>
	<style>
	body{
		background-color:  #C5FAD5;
		margin-top: 0;
	}
	ol,ul{
		text-align: left;
		margin-top:0px;
		margin-bottom:0px;
		line-height:120%;
	}
	dl{
		text-align: left;
	}
	p{
		margin-bottom: 0px;
	}
	#button{
		text-align:center;
	}
	button{
		 margin: 40px auto;
		 cursor: pointer;
		 display: block;
	}
	#content{
		font-size:20px;
		font-family: Verdana, sans-serif;
	}
	</style>
</head>
<body>
	<?php include("navbar.php"); ?>
	<br>
	<div id="content">
		<dl>
			<dt> Education </dt>
			<?php
				for ($i = 0; $i < count($education); $i++){
					$currentEdu = null;
					if ($i==0)
						$currentEdu = explode("\n",$education[$i]);
					else if ($i==count($education)-1){
						$temp = explode("\n",$education[$i]);
						for ($j = 1; $j < count($temp)-1; $j++){
							$currentEdu[$j-1] = $temp[$j];
						}
					}
					else {
						$temp = explode("\n",$education[$i]);
						for ($j = 1; $j < count($temp); $j++){
							$currentEdu[$j-1] = $temp[$j];
						}
					}
					echo "<dd>".$currentEdu[0]."<br>";
					echo $currentEdu[1]."<ul>";
					for ($j = 2; $j < count($currentEdu); $j++){
						echo "<li>".$currentEdu[$j]."</li>";
					}
					echo "</ul></dd><br>";
				}
			?>
		</dl>
		<dl>
			<dt>  Skills </dt>
			<?php
				for($i = 0; $i < count($skills)-1; $i++){
					echo "<dd>".$skills[$i]."</dd>";
				}
			?>
		</dl>
		<p> Awards </p>
		<ol>
			<?php
				for($i = 0; $i < count($awards)-1; $i++){
					echo "<li>".$awards[$i]."</li>";
				}
			?>
		</ol>
		
		<p> Work and Volunteer Experience </p>
		<ol>
			<?php
				for ($i = 0; $i < count($workExp); $i++){
					$currentExp = null;
					if ($i==0)
						$currentExp = explode("\n",$workExp[$i]);
					else if ($i==count($workExp)-1){
						$temp = explode("\n",$workExp[$i]);
						for ($j = 1; $j < count($temp)-1; $j++){
							$currentExp[$j-1] = $temp[$j];
						}
					}
					else {
						$temp = explode("\n",$workExp[$i]);
						for ($j = 1; $j < count($temp); $j++){
							$currentExp[$j-1] = $temp[$j];
						}
					}
					echo "<li>".$currentExp[0]."<br>";
					echo $currentExp[1]."<ul>";
					for ($j = 2; $j < count($currentExp); $j++){
						echo "<li>".$currentExp[$j]."</li>";
					}
					echo "</ul></li><br>";
				}
			?>
		</ol>
		
		<p> References </p>
		<ul>
			<?php
				for ($i = 0; $i < count($referees); $i++){
					$currentRef= null;
					if ($i==0)
						$currentRef = explode("\n",$referees[$i]);
					else if ($i==count($referees)-1){
						$temp = explode("\n",$referees[$i]);
						for ($j = 1; $j < count($temp)-1; $j++){
							$currentRef[$j-1] = $temp[$j];
						}
					}
					else {
						$temp = explode("\n",$referees[$i]);
						for ($j = 1; $j < count($temp); $j++){
							$currentRef[$j-1] = $temp[$j];
						}
					}
					echo "<li>".$currentRef[0]."<br><ul>";
					for ($j = 1; $j < count($currentRef); $j++){
						echo "<li>".$currentRef[$j]."</li>";
					}
					echo "</ul></li>";
				}
			?>
		</ul>
		
		<button type="button"> Download Full CV </button>
	</div>
</body>
</html>