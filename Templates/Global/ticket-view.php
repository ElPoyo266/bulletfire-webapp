<!DOCTYPE html>
	<html>
		<head>

			<meta charset="utf-8">
			<title><?= ' ' /*$translate->translate('Ticket view');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'Styles/home.css' ?>">

		</head>
		
		<body>

			<h1><?= ' '/*$translate->translate('Ticket view');*/ ?></h1>
			<div class="ticket view">
				<h3>
				<?php
                    
                    foreach($param['tickets'] as $ticket){
                        echo htmlspecialchars($ticket['titre']) . ' le ' . $ticket['date_billet'] . ' à ' . $ticket['heure_billet'];
                ?>
                <p>
                <em><a href="comment-view.php?id=<?=$ticket['id']?>">Commentaires</a></em>
                </p>
                <?php
                }
				?>
				</h3>
				<p>
				<?php
				echo htmlspecialchars($donnees['contenu']);
				?>
				<br />
				</p>
			</div>

		</body>
    </html>