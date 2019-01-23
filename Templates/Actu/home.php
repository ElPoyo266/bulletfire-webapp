<!DOCTYPE html>
	<html>
		<head>

			<?php require("Templates/Global/head.php") ?>
			<title><?= ' ' /*$translate->translate('Ticket view');*/ ?></title>
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'CSS/actuHome.css' ?>">

		</head>
		
		<body>
			<?php require("Templates/Global/header.php") ?>
			<h3><?= ' '/*$translate->translate('Ticket view');*/ ?>Actualités</h3>
			<main>
					<?php
                    foreach($param['actu'] as $actu):
					?>
					<a href="<?= PATH . '/actu/' . $actu->getId() ?>" class="actu">
						<div class="left">
							<img src="<?= ASSET . 'Pics/Articles/' . $actu->getPic() ?>">
							<h4><?= $actu->getTitle() ?></h4>
						</div>
						<div class="right">
							<strong><?= $actu->getCat() ?> by Bulletfire team</strong>
							<i><?= $actu->getDate() ?></i>	
						</div>
				    </a>
                    <?php 
                    endforeach;
                    ?>
			</main>

		</body>
    </html>