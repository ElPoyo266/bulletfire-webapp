<!DOCTYPE html>
	<html>
		<head>

			<?php require("Templates/Global/head.php") ?>
			<title><?= ' ' /*$translate->translate('Ticket view');*/ ?></title>
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'CSS/actuHome.css' ?>">

		</head>
		
		<body>
			<?php require("Templates/Global/header.php") ?>
			<h1><?= ' '/*$translate->translate('Ticket view');*/ ?>Actualités</h1>
			<div>
					<?php
                    foreach($param['actu'] as $actu):
					?>
					<a href="<?= PATH . '/actu/' . $actu->getId() ?>">
                        <h3><?= htmlspecialchars($ticket['titre'])?></h3>
                        <p><?= $ticket['date_billet_cplt'] . ' ' . htmlspecialchars($ticket['contenu']) ?></p>
				    </a>
                    <?php 
                    endforeach;
                    ?>
			</div>

		</body>
    </html>