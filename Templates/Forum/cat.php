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
			<h3><?= ' '/*$translate->translate('Ticket view');*/ ?>Forum</h3>
			<div class="ticket-view">
					<?php
                    foreach($param['ticket'] as $ticket):
					?>
					<a href="<?= PATH . '/forum/post/' . $ticket['id'] ?>">
                        <h3><?= htmlspecialchars($ticket['titre']) ?></h3>
                        <h4><?= htmlspecialchars($ticket['auteur']) ?></h4>
                        <p><?= $ticket['date_creation_cplt'] . ' ' . htmlspecialchars($ticket['contenu']) ?></p>
				    </a>
                    <?php 
                    endforeach;
                    ?>
			</div>
			<div class="ticket_creation">
			<h1><?= ' '/*$translate->translate('Ticket creation');*/ ?></h1>
			<form action="newpost" method="post">
				<label for="auteur">Auteur</label>
				<input type="text" name="auteur" id="auteur" placeholder="Entrer votre nickname">
				<label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" placeholder="Entrer votre titre de post"></textarea>
                <label for="contenu">Contenu</label>
                <textarea name="contenu" id="contenu" placeholder="Entrer votre post"></textarea>
				<br>
                <input type="submit" value="Valider">
				<?php
					echo $param['error'];
				?>
            </form>
			</div>

		</body>
    </html>