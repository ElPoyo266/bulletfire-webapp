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
			<div id="contenu">
			<table >
					<?php
                    foreach($param['cat'] as $cat):
					?>
					<tr><td>
					<a href="<?= PATH . '/forum/' . $cat[0] ?>">
                        <h4><?= $cat[0] ?></h4>
                        <p><?= $cat[1] ?></p>
				    </a>
				    </td></tr>
					<br/>
                    <?php 
                    endforeach;
                    ?>
			</table>
		</div>

		</body>
    </html>