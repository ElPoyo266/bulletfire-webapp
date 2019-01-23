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
					<img class="top-img" src="<?= ASSET . 'Pics/Articles/shotgun.png' ?>">
				</span>

				<span class="content">
					<div class="intern">	
						<h1 class="title">Vous avez demandez un fusil à pompe ?</h1>
						<strong class="date"><?= $param["actu"]->getDate() ?></strong>
						<strong class="author"><?= $param["actu"]->getCat() ?> by Bulletfire Team</strong>
						<div class="text">
							<p>
								Hey tout le monde !
							</p>
							<p>
								Vous allez enfin pouvoir arrêter de nous dire à quel il est scandaleux qu'il n'y ait pas de fusil à pompe dans le jeu.
							</p>
							<p>
								Une des prochaine mise à jour contiendra bien le premier fusil à pompe de l'histoire de Bulletfire !
							</p>

							<p>
								Il arrivera directement avec de nombreux skins disponibles dans les coffres ou dans le magasin.
							</p>
							<p>
								Alors heureux ?
							</p>
							<p>
								Et on en a pas fini avec les annonces ! De nouvelles armes exclusives feront leur apparition dans les prochaines mise à jour alors restez attentif.
							</p>
							<p>
								Toute l'équipe de Bulletfire vous remercie pour votre soutient et espère que ces nouvelles vous ont mis l'eau à la bouche.
							</p>
						</div>
					</div>
				</span>
			</div>

		</main>

	</body>

</html>