<!DOCTYPE html>
	<html>
		<head>

			<meta charset="utf-8">
			<title><?= ' ' /*$translate->translate('Ticket view');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'Styles/home.css' ?>">

		</head>
		
		<body>

			<h1><?= ' '/*$translate->translate('Ticket view');*/ ?></h1>
			<div class="ticket view">
				<a href="comment-view.php?id=<?=$param['ticket']['id']?>"><h3>
					<?php
                    foreach($param['ticket'] as $ticket){
					?>
					<p>
					<?php
                        echo '"' . htmlspecialchars($ticket['titre']) . '"';
					?>
					</p>
					<p>
					<?php
						echo $ticket['date_creation_cplt'];
						echo htmlspecialchars($ticket['contenu']);
					}
                	?>
					</p>
				</h3>
				<br/>
				</a>
			</div>

		</body>
    </html>