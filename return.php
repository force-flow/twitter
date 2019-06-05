<?php header('location: http://twitter/index.php') ?>
<?php 
$connect = mysqli_connect('127.0.0.1','root','','bd');
$query = mysqli_query($connect,"UPDATE posts SET text ='".$_POST['B']."' WHERE id='".$_POST['A']."'");

 ?>