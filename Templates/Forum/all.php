<!DOCTYPE html>
	<html>
		<head>

			<?php require("Templates/Global/head.php") ?>
			<title><?= ' ' /*$translate->translate('Ticket view');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'Styles/home.css' ?>">

		</head>
		
		<body>
			<?php require("Templates/Global/header.php") ?>
			<h1><?= ' '/*$translate->translate('Ticket view');*/ ?></h1>
			<div class="ticket view">
					<?php
                    foreach($param['ticket'] as $ticket):
					?>
					<a href="<?= PATH . '/forum/post/' . $ticket['id'] ?>">
                        <h3><?= htmlspecialchars($ticket['titre'])?></h3>
                        <p><?= $ticket['date_billet_cplt'] . ' ' . htmlspecialchars($ticket['contenu']) ?></p>
				    </a>
                    <?php 
                    endforeach;
                    ?>
			</div>

		</body>
    </html>