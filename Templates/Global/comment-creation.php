<!DOCTYPE html>
	<html>
		<head>

			<meta charset="utf-8">
			<title><?= ' ' /*$translate->translate('Topic');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'Styles/home.css' ?>">

		</head>
		
		<body>
            <h1><?= ' '/*$translate->translate('Topic Name');*/ ?></h1>
                <h2><a><?= ' '/*$translate->translate('Topic Theme');*/ ?></a></h2>
                
                //topic à afficher selon css

			<h1><?= ' '/*$translate->translate('Topic creation');*/ ?></h1>
			<form action="" method="post">
                <label for="contenu">Contenu</label>
                <input type="text" name="surname" id="surname" placeholder="Entrer votre réponse"  title="Ce champs est                                 obligatoire."required><br>
                <input type="submit" value="Envoyer">
            </form>

		</body>
	</html>