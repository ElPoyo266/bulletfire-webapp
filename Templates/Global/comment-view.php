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

				<div class="comment">
				<h3>
				<?php
					foreach($param['comment'] as $comment){
						echo' le ' . $comment['date_commentaire'] . ' à ' . $comment['heure_commentaire']; 						
				?>
				</h3>
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
                <input type="text" name="commentaire" id="commentaire" placeholder="Entrer votre commentaire"  title="Ce champs est                                 obligatoire."required><br>
                <input type="submit" value="Envoyer">
            </form>

		</body>
	</html>