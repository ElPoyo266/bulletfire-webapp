<!DOCTYPE html>
	<html>
		<head>

			
			<title>My FramePhp App</title>
			<?php require("Templates/Global/head.php") ?>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'Styles/home.css' ?>">

		</head>
		
		<body>

			<?php require("Templates/Global/header.php") ?>

			<h1>FramePhp</h1>
			<?php echo $param['var'] ?>

			<!-- The method translate of translate object allows you to translate your site -->
			<h2><?= $translate->translate('Get started'); ?></h2>
		</body>
	</html>