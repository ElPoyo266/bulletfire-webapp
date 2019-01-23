<!DOCTYPE html>
<html>

	<head>
		<title>Roger that sergent !</title>
		<?php require("Templates/Global/head.php"); ?>
		<link rel="stylesheet" type="text/css" href="<?= ASSET . 'CSS/article.css' ?>">
	</head>

	<body>

		<?php require("Templates/Global/header.php"); ?>

		<main>
				<span class="top">
					<img class="top-img" src="<?= ASSET . 'Pics/Articles/quotes.png' ?>">
				</span>

				<span class="content">
					<div class="intern">	
						<h1 class="title">Les répliques sont disponibles !</h1>
						<strong class="date"><?= $param["actu"]->getDate() ?></strong>
						<strong class="author"><?= $param["actu"]->getCat() ?> by Bulletfire Team</strong>
						<div class="text">
							<p>
								Hey tout le monde !
							</p>
							<p>
								Avec la mise à jour 0.0.8 (toujours en version Alpha) arrivent les répliques. Ce nouveau mode de communication vous permet de faire parler votre personnage pendant une partie.
							</p>
							<p>
								Les répliques vous permettront de communiquer avec vos alliés ou de faire tilter vos ennemis.
							</p>

							<p>
								Toute l'équipe de Bulletfire espère que vous apprécierez cette nouvelle fonctionnalité et que vous vous amuserez !
							</p>
						</div>
					</div>
				</span>
			</div>

		</main>

	</body>

</html>