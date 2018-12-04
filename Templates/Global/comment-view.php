<!DOCTYPE html>
	<html>
		<head>

			<meta charset="utf-8">
			<title><?= ' ' /*$translate->translate('Topic');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'Styles/home.css' ?>">

		</head>
		 
		<body>
            <h1><?= ' '/*categorie a recup en bdd*/ ?></h1>
                <h2><a><?= ' '/*theme a recup en bdd*/ ?></a></h2>
				<div class="ticket">
				<?php
					echo'<h3>' . $param['ticket']['titre'] . '</h3>';
					echo'<p> le ' . $param['ticket']['date_billet'] . ' à ' . $param['ticket']['heure_billet'] . '</p>';
				?>
				<p>
				<?php
					echo htmlspecialchars($param['contenu']);
				?>
				</p>
				</div>
				<div class="comment">
				<h4>
				<?php
					foreach($param['comment'] as $comment){
						echo'<p> le ' . $comment['date_commentaire'] . ' à ' . $comment['heure_commentaire'] . '</p>';
					} 						
				?>
				</h4>
				<p>
				<?php
					echo htmlspecialchars($comment['commentaire']);
				?>
				<br />
				</p>
				</div>
					?>
			<h1><?= ' '/*$translate->translate('Comment creation');*/ ?></h1>
			<form action="" method="post">
                <label for="contenu">Contenu</label>
                <textarea name="commentaire" id="commentaire" placeholder="Entrer votre commentaire"></textarea>
				<br>
                <input type="submit" value="Envoyer">
            </form>

		</body>
	</html>