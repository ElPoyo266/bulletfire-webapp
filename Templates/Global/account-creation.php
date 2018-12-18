<!DOCTYPE html>
	<html>
		<head>

			<?php require("Templates/Global/head.php") ?>
			<title><?= ' ' /*$translate->translate('Account creation');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'Styles/home.css' ?>">

		</head>
		
		<body>
            <?php require("Templates/Global/header.php") ?>
			<h1><?= ' '/*$translate->translate('Account creation');*/ ?></h1>
			<form action="" method="post">
                <label for="nickname">Pseudo</label>
                <input type="text" name="nickname" id="nickname" placeholder="Entrer votre pseudo"  pattern="[a-zA-Z0-9_\.][a-zA-Z0-9_\-\.]*[a-zA-Z0-9_\-]|[a-zA-Z0-9_]" title="Ce champs est obligatoire." required><br>
                <label for="pwd">Mot de passe</label>
                <input type="password" name="pwd" id="pwd" placeholder="Entrer votre mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Minimum 8 caractères avec une majuscule, une minuscule et un chiffre" required><br>
                <label for="pwd">Confirmer votre mot de passe</label>
                <input type="password" name="pwd1" id="pwd1" placeholder="Confirmer votre mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Entrer le mot de passe précédemment entré" required><br>
                <label for="surname">Nom</label>
                <input type="text" name="surname" id="surname" placeholder="Entrer votre nom"  title="Ce champs est obligatoire."required><br>
                <label for="name">Prénom</label>
                <input type="text" name="name" id="name" placeholder="Entrer votre prénom"  title="Ce champs est obligatoire."required><br>
                <label for="mail">E-mail</label>
                <input type="email" name="mail" id="mail" placeholder="Entrer votre e-mail"  title="Entrer un e-mail valide."required><br>
                <label for="mail">Confirmer votre e-mail</label>
                <input type="email" name="mail1" id="mail1" placeholder="Confirmer votre e-mail"  title="Entrer l'e-mail' précédemment entré"required><br>
                <input type="checkbox" name="condition" id="condition"  title="Ce champs est obligatoire." required>J'accepte les termes et conditions d'utilisations<br>
                <input type="checkbox" name="newsletter" id="newsletter">Je veux m'inscrire à la newsletter<br>
                <input type="submit" value="Créer un compte">
            </form>

		</body>
	</html>