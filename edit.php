<meta charset="utf-8">
<form action="return.php" method="POST">
	<?php  
	echo '<input value="'.$_POST['a'].'" name="A" style="display:none">';
	echo '<input value="'.$_POST['b'].'" name="B">';
	echo '<button>ok</button>';
?>
</form>