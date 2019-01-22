<!DOCTYPE html>
	<html>
		<head>

			<?php require("Templates/Global/head.php") ?>
			<title><?= ' ' /*$translate->translate('Ticket view');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'CSS/forumcat.css' ?>">

		</head>
		
		<body>
			<?php require("Templates/Global/header.php") ?>
			<h1><?= ' '/*$translate->translate('Ticket view');*/ ?>Forum</h1>
			<div class="titreCat"><h2><?= $param['categorie']?></h2></div>
			<br>
			<div class="ticket-view">
					<?php
                    foreach($param['ticket'] as $ticket):
					?>
					<a href="<?= PATH . '/forum/post/' . $ticket['id'] ?>">
                        <h3><?= htmlspecialchars($ticket['titre']) ?></h3>
                        <h4><?= htmlspecialchars($ticket['auteur']) ?></h4>
                        <h5><?= $ticket['date_creation_cplt'] ?></h5>
				    </a>
                    <?php 
                    endforeach;
                    ?>
			</div>
			<div class="ticket_creation">
				<form method="post">
					<div class="nomTitre"><label for="titre">Titre</label></div>
                	<input type="text" name="titre" id="titre" placeholder="Entrer votre titre">
                	<div class="nomContenu"><label for="contenu">Contenu</label></div>
                	<textarea name="contenu" id="contenu" placeholder="Entrer votre post"></textarea>
					<br>
                	<div class="buttonSub"><input type="submit" value="Valider"></div>
            	</form>
			</div>
		</body>
    </html>