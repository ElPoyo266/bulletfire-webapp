<!DOCTYPE html>
<html>
	
	<head>

		<title>Bulletfire</title>
		<?php require("Templates/Global/head.php"); ?>
		<link rel="stylesheet" type="text/css" href="<?= ASSET . 'CSS/statsusers.css' ?>">
	</head>
	
	<body>

		<?php require("Templates/Global/header.php"); ?>

		<main>
			<div>
				<form method="get">
					<input type="text" name="player" placeholder="Search for a user by his pseudo ...">
					<button type="submit">Search</button>	
				</form>
			</div>

			<?php foreach($param['res'] as $p) : ?>
				<a href="<?= PATH . '/stats/user/' . $p ?>">
					<span>
						<h3><?= $p ?></h3>
					</span>
				</a>
			<?php endforeach; ?>			
		</main>

	</body>

</html>