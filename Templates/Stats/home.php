<!DOCTYPE html>
<html>
	
	<head>

		<title>Bulletfire</title>
		<?php require("Templates/Global/head.php"); ?>
		<link rel="stylesheet" type="text/css" href="<?= ASSET . 'CSS/statshome.css' ?>">
	</head>
	
	<body>

		<?php require("Templates/Global/header.php"); ?>

		<main>
			
			<a href="<?= PATH . '/stats/leaderboard' ?>">
				<span>
					<img src="#">
					<h3>Classement</h3>
				</span>	
			</a>

			<a href="<?= PATH . '/stats/users' ?>">
				<span>
					<img src="#">
					<h3>Stats de joueur</h3>
				</span>	
			</a>

			<a href="<?= PATH . '/stats/weaps' ?>">
				<span>
					<img src="#">
					<h3>Armes et équipements</h3>
				</span>	
			</a>

			<a href="<?= PATH . '/stats/facts' ?>">
				<span>
					<img src="#">
					<h3>Faits divers</h3>
				</span>	
			</a>
			
		</main>

	</body>

</html>