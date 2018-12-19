<!DOCTYPE html>
	<html>
		<head>

			<?php require("Templates/Global/head.php") ?>
			<title><?= ' ' /*$translate->translate('Account creation');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'CSS/register.css' ?>">

		</head>
		
		<body>
            <?php require("Templates/Global/header.php") ?>

			<form action="" method="post">
                <h3>Créer un compte</h3>

                <span>
                    
                    <label for="nickname">Pseudo
                    <input type="text" name="nickname" id="nickname" placeholder="Entrer votre pseudo"  pattern="[a-zA-Z0-9_\.][a-zA-Z0-9_\-\.]*[a-zA-Z0-9_\-]|[a-zA-Z0-9_]" title="Ce champs est obligatoire." required>
                    </label>
                    <label for="pwd">Mot de passe
                    <input type="password" name="pwd" id="pwd" placeholder="Entrer votre mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Minimum 8 caractères avec une majuscule, une minuscule et un chiffre" required>
                    </label>
                    <label for="pwd" style="display : none">Confirmer votre mot de passe
                    <input type="password" name="pwd1" id="pwd1" placeholder="Confirmer votre mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Entrer le mot de passe précédemment entré" required>
                    </label>
                    <label for="surname" style="display : none">Nom
                    <input type="text" name="surname" id="surname" placeholder="Entrer votre nom"  title="Ce champs est obligatoire."required>
                    </label>
                    <label for="name" style="display : none">Prénom
                    <input type="text" name="name" id="name" placeholder="Entrer votre prénom"  title="Ce champs est obligatoire."required>
                    </label>
                    <label for="mail">E-mail
                    <input type="email" name="mail" id="mail" placeholder="Entrer votre e-mail"  title="Entrer un e-mail valide."required>
                    </label>
                    <label for="mail" style="display : none">Confirmer votre e-mail
                    <input type="email" name="mail1" id="mail1" placeholder="Confirmer votre e-mail"  title="Entrer l'e-mail' précédemment entré"required>
                    </label>
                    <input style="display : none" type="checkbox" name="condition" id="condition"  title="Ce champs est obligatoire." required checked><!--J'accepte les termes et conditions d'utilisations<br>-->
                    <input style="display : none" type="checkbox" name="newsletter" id="newsletter"><!--Je veux m'inscrire à la newsletter<br>-->
                    
                </span>
                <button type="submit" class="button">Créer un compte</button>
                
            </form>

		</body>
	</html>