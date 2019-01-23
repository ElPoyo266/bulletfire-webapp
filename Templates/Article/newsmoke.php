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
					<img class="top-img" src="<?= ASSET . 'Pics/Articles/smoke.png' ?>">
				</span>

				<span class="content">
					<div class="intern">	
						<h1 class="title">Les grenade smoke font leur entrée !</h1>
						<strong class="date"><?= $param["actu"]->getDate() ?></strong>
						<strong class="author"><?= $param["actu"]->getCat() ?> by Bulletfire Team</strong>
						<div class="text">
							<p>
								Hey tout le monde !
							</p>
							<p>
								Avec la mise à jour 0.0.10 (toujours en version Alpha) arrivent les grenades smoke. Cette nouvelle arme explosive en fera tilter plus d'un !
							</p>
							<p>
								Vous posséder 3 grenades smoke. Qui vous permettent d'enfumer la map. Envoyez-les sans retenu mais éviter quand même vos alliés (ou pas).
							</p>
							<p>
								Les grenades smoke ne sont pas encore personnalisables mais sans vous spoiler les skins arrivent bientôt ! Alors restez attentifs au prochaines mises à jour.
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