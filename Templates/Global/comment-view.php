<!DOCTYPE html>
	<html>
		<head>

			<?php require("Templates/Global/head.php") ?>
			<title><?= ' ' /*$translate->translate('Topic');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'Styles/home.css' ?>">

		</head>
		 
		<body>
			<?php require("Templates/Global/header.php") ?>
            <h1><?= ' '/*categorie a recup en bdd*/ ?></h1>
				<div class="ticket">
				<table>
				<?php
					echo'<h3>' . $param['ticket']['titre'] . '</h3>';
					echo'<p>' . $param['ticket']['date_creation_cplt'] . ' ' . $param['ticket']['auteur'] . '</p>';
				?>
				<p>
				<?php
					echo htmlspecialchars($param['ticket']['contenu']);
				?>
				</p>
				</div>
				<div class="comment">
				<h4>
				<?php
					foreach($param['comment'] as $comment){
						echo'<p> le ' . $comment['date_com_cplt'] . ' ' . $comment['auteur'] . '</p>';
						echo '<p>'. htmlspecialchars($comment['commentaire']).'</p>';
					} 						
				?>
				</h4>
				<p>
				<br/>
				</p>
				</div>
			<form action="" method="post">
				<label for="titre">Commentaire</label>
                <textarea name="commentaire" id="commentaire" placeholder="Entrer votre commentaire"></textarea>
				<br>
                <input type="submit" value="Envoyer">
            </form>
		</body>
	</html>