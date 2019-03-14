<!DOCTYPE html>
	<html>
		<head>

			
			<title>Bulletfire</title>
			<?php require("Templates/Global/head.php") ?>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'CSS/home.css' ?>">

		</head>
		
		<body>

			<?php require("Templates/Global/header.php") ?>

			<main>
				<div>
					<img src="<?= ASSET . 'Pics/gameImg.png' ?>" class="backimg">
					<span>
						<img src="<?= ASSET . 'Pics/bulletfiretxt.png' ?>" class="titleimg">
						<div>
							<a href="http://admin.bulletfire.fr/Assets/Uploads/LauncherApp/bulletfirelaunchersetup.exe" download class="win">
								<img src="<?= ASSET . 'Pics/windowsplat.png' ?>">
								<strong>Download Launcher for windows</strong>
							</a>
							<!--
							<a href="#" class="mac">
								<img src="<?= ASSET . 'Pics/macplat.png' ?>">
								<strong>Download Launcher for mac</strong>
							</a>
							-->
							<a href="http://admin.bulletfire.fr/Assets/Uploads/LauncherApp/bulletfirelaunchersetup.deb" download class="lin">
								<img src="<?= ASSET . 'Pics/linuxplat.png' ?>">
								<strong>Download Launcher for linux</strong>
							</a>
						</div>	
					</span>
					
				</div>
			</main>
		</body>
	</html>