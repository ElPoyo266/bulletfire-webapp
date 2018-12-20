<!DOCTYPE html>
	<html>
		<head>

			<?php require("Templates/Global/head.php") ?>
			<title><?= ' ' /*$translate->translate('Ticket view');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'CSS/forumhome.css' ?>">

		</head>
		
		<body>
			<?php require("Templates/Global/header.php") ?>
			<h3><?= ' '/*$translate->translate('Ticket view');*/ ?>Forum</h3>
			<div class="ticket-view">
					<?php
                    foreach($param['cat'] as $cat):
					?>
					<a href="<?= PATH . '/forum/' . $cat ?>">
                        <h4><?= $cat ?></h4>
				    </a>
                    <?php 
                    endforeach;
                    ?>
			</div>

		</body>
    </html>