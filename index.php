<?php $connect = mysqli_connect('127.0.0.1','root','','bd') ;?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">
	<div class="container-fluid bg-white">
	<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>	
	</div>
	<div class="container">
		<div class="row">
		<div class="col-3">
				<!-- Профиль -->
			<div class="bg-white border">
				<div>
					<img src="images/background.jpg" alt=""  class="w-100">
				</div>
				<div class="row">
					<div class="col-3">
						<img src="images/avatar.jpg" alt="" class="rounded-circle">
					</div>
					<div class="col-9">
						<div>
							<a href="">MarySmith</a>
						</div>
						<div>
							<a href="">@MarySmith</a>
						</div>
					</div>
					</div>
					<div class="row">
						<div class="col-6">
						<div>
							<p></p><a href="">Твиты</a>
						</div>
						<div>
							<a href="">136</a>
						</div>
						</div>
						<div class="col-6">
						<div>
							<p></p><a href="">Читаемые</a>
						</div>
						<div>
							<a href="">253</a>
						</div>
					</div>
					</div>
			</div>

			<!--Актуальные темы для вас-->
			<div class="bg-white mt-2 pl-3 pt-2 pb-2 border">
				<div>
					<h6>Актуальные темы для вас</h6>
				</div>
				<?$query = mysqli_query($connect, 'SELECT * FROM themes');?>
				<?php for ($i=0; $i < $query->num_rows ; $i++) { ?>
				<div>
				<a href=""><?php $theme = $query->fetch_assoc(); echo $theme['theme'] ?></a>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="col-6 bg-white border">

			<form method="POST" action="insert.php">
				<div>

			<textarea name="a">

			</textarea>		
			<button>
				твитнуть
			</button>
			</div>
			</form>
			<!-- пост -->
			<?$query = mysqli_query($connect, 'SELECT * FROM posts ORDER BY id DESC');
			 ?>
			 <?php for ($i=0; $i < $query->num_rows ; $i++){ ?>
			<div class="row mt-4 border">
			<div class="col-2">
				<a href=""><?php $logo = $query->fetch_assoc(); echo '<img src="' . $logo['logo'] . '" class="rounded-circle">'; ?></a>
			</div>
			<div class="col-10 my-2">
			<div class="row">
				<h5><a href="#"><?php echo $logo['title']; ?></a></h5>
			</div>
			<div>
				<p><?php echo $logo['text']; ?></p>
			</div>
			<div>
				<?php  echo '<img src="' . $logo['img'] . '" class="w-100">'; ?>
			</div>
			<div class="row">
				<div class="col-3">
					<a href="#"><img src="images/comment.png" alt=""></a>
				</div>
				<div class="col-3">
					<a href="#"><img src="images/retweet.png" alt=""></a>
				</div>
				<div class="col-3">
					<a href="#"><img src="images/like.png" alt=""></a>
				</div>
				<div class="col-3">
					<a href="#"><img src="images/envelope.png" alt=""></a>
				</div>
			</div>
			</div>
				<form method="POST" action="delete.php" style="width:100%; text-align:center">
				<?php echo' <input style="display: none;" type="" name="id" value="'.$logo['id'].'">'?>
				<button class="btn bg-primary">Удалить</button>
			</form>
			<form method="POST" action="edit.php" style="width:100%; text-align:center">
				<?php echo '<input name="a" value="'.$logo['id'].'"style="display: none;">' ?>
				<?php echo '<input name="b" value="'.$logo['text'].'" style="display: none;">' ?>
				<button class="btn bg-primary my-1" >
					Редактировать
				</button>
			</form>
			</div>
		<?php } ?>
		</div>
	<img src="" alt="">
		<div class="col-3">
			<!--Кого читать-->
			<div class="bg-white pl-3 border">
				<div class="row">
					<div class="col-6">
						<h5>Кого читать</h5>
					</div>
					<div class="col-3">
						<a href="">Обновить</a>
					</div>
				</div>
				<div class="row col-12">
					<?$query = mysqli_query($connect, 'SELECT * FROM whoread');?>
					 <?php for ($i=0; $i < $query->num_rows ; $i++) { ?>
					 	<div class="row my-2">
					<div class="col-4">
						<?
						$whoread = $query->fetch_assoc(); echo '<img src="' . $whoread['img'] . '" class="rounded-circle w-100">';
						?>
					</div>
					<div class="col-8">
						<h6><a href=""><?php echo $whoread['text']; ?></a></h6>
						<button class="btn btn-primary"><a href="" class="text-white">Читать</a></button>
					</div>
					</div>
				<?php } ?>
				</div>
			</div>
			<!--еще что то-->
			<div class="bg-white mt-2">

			</div>

		</div>
		</div>
	</div>
</body>
</html>