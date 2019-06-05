<?php header('Location: http://twitter/index.php') ?>
<?php $connect = mysqli_connect('127.0.0.1','root','','bd');
mysqli_query($connect,"DELETE FROM posts WHERE id=". $_POST['id']);

 ?>