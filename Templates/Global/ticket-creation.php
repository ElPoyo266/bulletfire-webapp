<!DOCTYPE html>
	<html>
		<head>

			<meta charset="utf-8">
			<title><?= ' ' /*$translate->translate('Ticket creation');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'Styles/home.css' ?>">

		</head>
		
		<body>
			<h1><?= ' '/*$translate->translate('Ticket creation');*/ ?></h1>
			<form action="" method="post">
				<label for="titre">Titre</label>
				<input type="text" name="auteur" id="auteur" placeholder="Entrer votre nickname">
                <input type="text" name="titre" id="titre" placeholder="Entrer votre titre de post"></textarea>
                <label for="contenu">Contenu</label>
                <textarea name="contenu" id="contenu" placeholder="Entrer votre post"></textarea>
				<br>
                <input type="submit" value="Valider">
				<?php
					echo $param['error'];
				?>
            </form>

		</body>
    </html>