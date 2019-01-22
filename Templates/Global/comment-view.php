<!DOCTYPE html>
	<html>
		<head>

			<?php require("Templates/Global/head.php") ?>
			<title><?= ' ' /*$translate->translate('Topic');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'CSS/home.css' ?>">

		</head>
		 
		<body>
			<?php require("Templates/Global/header.php") ?>
            <h1><?= ' '/*categorie a recup en bdd*/ ?></h1>
            <section>
            	<div class="post-comment">
					<?php
						echo'<div class="titreh1"><h1>' . $param['ticket']['titre'].' </h1></div> ';
						echo'<p class="date">'.$param['ticket']['date_creation_cplt'].'</p>';
						echo'<p class ="auteur">' . $param['ticket']['auteur'] .'</p>';
						echo '<p class="contenu">'.htmlspecialchars($param['ticket']['contenu']).'</p>';
					?>
				</div>
				<br>
				<br>
			</section>
				<?php
					foreach($param['comment'] as $comment){
						echo '<div class="comment">';
						echo '<section>';
						echo'<p class="date">' . $comment['date_com_cplt'].'</p>';
						echo '<p class ="auteur">' . $comment['auteur'].'</p>' ;
						echo '<p class="contenu">'. htmlspecialchars($comment['commentaire']).'</p>';
						echo '</section>';
						echo '</div>';
					} 						
				?>
			<form action="" method="post">
				<div class="nomCom"><label for="commentaire">Commentaire</label></div>
                <textarea name="commentaire" id="commentaire" placeholder="Entrer votre commentaire"></textarea>
				<br>
                <div class="buttonCom"><input type="submit" value="Envoyer"></div>
            </form>
		</body>
	</html>