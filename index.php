<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div>
	<h1>Блог</h1>
	<?php 
	include 'database.php'
	 ?>
	<?php 
	for ($i=0; $i< count($database);$i++){
		echo '<div class ="box">';
		echo '<h2>' . $database[$i]['title'] . '</h1>';
		echo '<p>' . $database[$i]['short'] . '</p>';
		echo '<a href ="page.php?index=' .$i .'">Далее</a>';
		echo '</div>';
	}
	 ?>
	 </div>

</body>
</html>