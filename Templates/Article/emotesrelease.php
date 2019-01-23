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
					<img class="top-img" src="<?= ASSET . 'Pics/Articles/emotes.png' ?>">
				</span>

				<span class="content">
					<div class="intern">	
						<h1 class="title">Faites vous de la place sur le dancefloor !</h1>
						<strong class="date"><?= $param["actu"]->getDate() ?></strong>
						<strong class="author"><?= $param["actu"]->getCat() ?> by Bulletfire Team</strong>
						<div class="text">
							<p>
								Hey tout le monde !
							</p>
							<p>
								Avec la mise à jour 0.0.9 (toujours en version Alpha) arrivent les émotes. Laisser vos émotions s'exprimer en dansant.
							</p>
							<p>
								Les émotes vous permettent de faire danser votre personnage pendant le jeu afin de faire tilter vos adversaires ou simplement de montrer votre joie de gagner.
							</p>

							<p>
								Vous pouvez en acheter dans le store ou en obtenir dans les coffres. De nouvelles émotes arrivent bientôt alors soyez prêts !
							</p>
							<p>
								On vous attend dans le store !
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