<!DOCTYPE html>
<html>
	
	<head>

		<title>Bulletfire</title>
		<?php require("Templates/Global/head.php"); ?>
		<link rel="stylesheet" type="text/css" href="<?= ASSET . 'CSS/statsleader.css' ?>">
	</head>
	
	<body>

		<?php require("Templates/Global/header.php"); ?>

		<main>
			
			<h2>Classement</h2>
			<?php 
			$nb = $param["first"];
			foreach($param["leaderboard"] as $player) : 
			?>
				<a href="<?= PATH . '/stats/user/' . trim($player["nickname"]) ?>">
					<span>
						<strong><?= $nb ?></strong>
						<h3><?= $player["nickname"] ?></h3>
						<i><?= $player["rank"] ?></i>
					</span>	
				</a>
			<?php 
			$nb++;
			endforeach; 
			?>

			<?php 
			if($param["first"] > 1) {
			?>
				<a href="<?= PATH . '/stats/leaderboard?page=' . $param["previous"] ?>">Précédent</a>
			<?php 
			}
			?>

			<a href="<?= PATH . '/stats/leaderboard?page=' . $param["next"] ?>">Suivant</a>
			
		</main>

	</body>

</html>