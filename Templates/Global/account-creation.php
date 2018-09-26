<!DOCTYPE html>
	<html>
		<head>

			<meta charset="utf-8">
			<title><?= ' ' /*$translate->translate('Account creation');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'Styles/home.css' ?>">

		</head>
		
		<body>

			<h1><?= ' '/*$translate->translate('Account creation');*/ ?></h1>
			<form action="" method="post">
                <label for="nickname">Pseudo</label>
                <input type="text" name="nickname" id="nickname" placeholder="Entrer votre pseudo" required><br>
                <label for="pwd">Mot de passe</label>
                <input type="password" name="pwd" id="pwd" placeholder="Entrer votre mot de passe" required><br>
                <label for="pwd">Confirmer votre mot de passe</label>
                <input type="password" name="pwd1" id="pwd1" placeholder="Entrer votre mot de passe" required><br>
                <label for="surname">Nom</label>
                <input type="text" name="surname" id="surname" placeholder="Entrer votre nom" required><br>
                <label for="name">Prénom</label>
                <input type="text" name="name" id="name" placeholder="Entrer votre prénom" required><br>
                <label for="mail">E-mail</label>
                <input type="email" name="mail" id="mail" placeholder="Entrer votre e-mail" required><br>
                <label for="mail">Confirmer votre e-mail</label>
                <input type="email" name="mail1" id="mail1" placeholder="Entrer votre e-mail" required><br>
                <input type="checkbox" name="condition" id="condition" required>J'accepte les termes et conditions d'utilisations<br>
                <input type="checkbox" name="newsletter" id="newsletter">Je veux m'inscrire à la newsletter<br>
                <input type="submit" value="Créer un compte">
            </form>

			
		</body>
	</html>