<?php 
	$connect = mysqli_connect('127.0.0.1','root','','bd');
	mysqli_query($connect,"INSERT INTO posts(title,text,logo,img) VALUES('MarySmith','".$_POST['a']."','images/avatar.jpg','images/habr.jpg')");
	header('Location:http://twitter/index.php');

 ?>