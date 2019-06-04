<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="bg-info">
		<!--навигация-->
		<div class="header">
			<div class="container-fluid bg-primary">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum repellat praesentium unde voluptas ut nihil alias commodi deleniti itaque, explicabo, recusandae asperiores quo fugiat, ullam atque blanditiis reiciendis voluptatem dolores.
			</div>
		</div>
		<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'aihal_pn_9');
		$query = mysqli_query($connect, 'SELECT * FROM tweet ORDER BY id DESC'); ?>

		<div class="content">
			<div class="container bg-secondary">
				<form method="POST" action="kek.php">
						<input type="" name="text">
						<button>твит</button>
					</form>
				<div class="row mt-2">
					<!--левая колонка-->
					<div class="col-3 bg-light pl-2">
						<?php $connecte = mysqli_connect('127.0.0.1', 'root', '', 'aihal_pn_9');
						$querye = mysqli_query($connecte, 'SELECT * FROM actual'); ?>
						<?php $actual = $querye->fetch_assoc(); echo '<h5>' . $actual['title'] . '</h5>'; ?>
						<?php echo '<a>' . $actual['tag'] . '</a>'; ?>
					</div>
					<!--средняя колонка-->

					
					<div class="col-6 bg-light pl-2 ">
						<?php for($i = 0; $i < $query->num_rows; $i++){?>
						<div class="row">
							
						<div class="col-2 ">
							<a href="">
								<?php $logo = $query->fetch_assoc(); echo '<img src="' . $logo['logo'] . '">';?>
							</a>
						</div>
						
						<div class="col-10">
							<div class="row">
								<h5>
									<a href="#">
										<?php  echo '<h5>' . $logo['title'] . '</h5>'; ?>
									</a>
								</h5>
							</div>
						<div>
							<p>

								<?php  echo $logo['text']; ?>
							</p>
						</div>
						<div>
							<?php echo '<img class="w-100" src="' . $logo['img'] . '">'; ?>
						</div>
						<div class="row">
							<div class="col-3">
								<img src="comment.png" alt="">
							</div>
							<div class="col-3">
								<img src="retweet.png" alt="">
							</div>
							<div class="col-3 ">
								<img src="like.png" alt="">
							</div>
							<div class="col-3 ">
								<img src="envelope.png" alt="">
							</div>
						</div>
						<form action="delete.php" method="GET">
							<?php echo '<input name="id" value="' . $logo['id'] . '" style="display: none">' ?>
							<button>удалить</button>
						</form>
						<form action="update.php" method="POST">
							<?php echo '<input name="id" value="' . $logo['id'] . '" style="display: none"><input name="text" value="' . $logo['text'] . '" style="display: none" >' ?>
							<button>редактировать</button>
						</form>
						</div>
						</div>
						<?php } ?>
					</div>
					
					<!--правая колонка-->
					<div class="col-3 bg-light pl-2">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet porro voluptate sed optio temporibus voluptatum quaerat maxime aliquid placeat qui, hic ut, debitis pariatur esse cum cumque excepturi illum sit.
					</div>
				</div>
			</div>
		
		</div>
	</body>
</html>