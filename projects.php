<?php
	$projects = explode(";", file_get_contents("txtfiles/adminProjects.txt"));
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
	ol{
		text-align: justify;
		list-style-type: lower-roman;
		margin-top: 50px;
	}
	#content{
		font-size:20px;
		font-family: Verdana, sans-serif;
	}
	.ordered{
		margin-top:25px;
	}
	
	</style>
</head>
<body>
	<?php include("navbar.php"); ?>
	<div id="content">
		<ol reversed>
			<?php
				for ($i = 0; $i < count($projects); $i++){
					$currentProject = null;
					if ($i==0)
						$currentProject = explode("\n",$projects[$i]);
					else if ($i==count($projects)-1){
						$temp = explode("\n",$projects[$i]);
						for ($j = 1; $j < count($temp)-1; $j++){
							$currentProject[$j-1] = $temp[$j];
						}
					}
					else {
						$temp = explode("\n",$projects[$i]);
						for ($j = 1; $j < count($temp); $j++){
							$currentProject[$j-1] = $temp[$j];
						}
					}
					echo "<li class=\"ordered\">".$currentProject[0]."<br>";
					echo $currentProject[1]."<ul>";
					for ($j = 2; $j < count($currentProject); $j++){
						echo "<li>".$currentProject[$j]."</li>";
					}
					echo "</ul></li><br>";
				}
			?>
		</ol>
	</div>
</body>
</html>