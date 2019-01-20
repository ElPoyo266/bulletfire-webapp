<?php 
	
	// This is a demo class for a controller
	/*
	A controller must have the same name as the file with a first capital letter and must be followed by 'Controller'
	You can create as much controller as you need
	*/
	class DefaultController {

		
		// Home Page ...
		public function home () {
			
			// This is how you can use templates
			$view = new Template("Global:home");
			return $view->showTime();

			// However you can also just send text
			// return "toto";
		}
		// ... END

		public function accountCreation () {
			//Est-ce que tous les champs sont remplis ?
			if (isset($_POST['nickname']) and
				isset($_POST['pwd']) and
				isset($_POST['mail']) and
				isset($_POST['surname']) and
				isset($_POST['name']))
			{
				/*//Est-ce que le mot de passe et l'e-mail sont confirmés ?
				if ((($_POST['pwd']) === ($_POST['pwd1'])) and
				(($_POST['mail']) === ($_POST['mail1']))) 
				{*/
					$hash = hash('sha256', $_POST["pwd"]);
					
					//Appel de la fonction pour insérer un nouveau joueur dans la table Joueur
					insertNewPlayer ($_POST['nickname'], $_POST['surname'], $_POST['name'], $_POST['mail'], $hash);
					if (isset($error)) {
						echo '<p>'.$error.'<p>';
					}

					// Si le nouveau joueur a coché "Je veux m'inscrire à la newsletter"
					if  (isset($_POST['newsletter']))
					{
						// Appel de la fonction pour insérer son e-mail dans la table Newsletter
						newsletterSub ($_POST['mail']);
					}
				/*} else {
					if (($_POST['pwd']) !== ($_POST['pwd1'])) {
						echo '<p>'.'Erreur : mots de passe entrés différents'.'<p>';
					}

					if (($_POST['mail']) !== ($_POST['mail1'])) {
						echo '<p>'.'Erreur : e-mails entrés différents'.'<p>';
					}
				}*/
			}

			$view = new Template("Global:account-creation");
			return $view->showTime();
		}





	public function ticketCreation($idCat){
	//Ajout d'un ticket (Billet)
		$taberror = array();
		$player = $_SESSION["Player"];
		if ($player!=null and isset($_POST['titre']) and isset($_POST['contenu']))
		{
			$nomPlayer = $player->getNickname();
			insertNewTicket($nomPlayer, $_POST['titre'], $_POST['contenu'], $idCat);
				if (isset($error)) {
					$taberror[] = array($error);
				}
				else{
					$taberror[] = array("Votre sujet a été inséré avec succès.");
				}
		}
	}	




 
	public function recupTicket($nom_cat){
		$tab_cat = array("Communauté"=> 1, "Recherche De Groupe"=> 2);
		$id_cat_bd = $tab_cat[$nom_cat];
		$envoi = array();
		$envoi = selectTicket($id_cat_bd);
		$this->ticketCreation($id_cat_bd);
		if(isset($error)){
			echo '<p>'.$error.'</p>';
		}
		$view = new Template("Forum:cat", array('ticket'=> $envoi, 'categorie'=> $nom_cat));
		return $view->showTime();
	}


	public function commentCreation($id){
	// Ajout d'un commentaire
		$taberror = array();
		$player = $_SESSION["Player"];
		
		if ($player!=null and isset($_POST['commentaire']))
		{
			$nomPlayer = $player->getNickname();
			insertNewComment($id, $nomPlayer, $_POST['commentaire']);
				if (isset($error)) {
					$taberror[] = array($error);
				}
				else{
					$taberror[] = array("Votre commentaire a bien été pris en compte.");
				}
		}
	}	


	public function CommentPost($id_post){
		// Recuperation du post et des commentaires
		$ticket = array();
		$comment = array();
		$ticket = selectTicketbyId($id_post);
		$this->commentCreation($id_post);
		$comment = selectComment($id_post);
		if(isset($error)){
			echo '<p>'.$error.'</p>';
		}
		$view = new Template("Global:comment-view", array('ticket'=> $ticket, 'comment'=>$comment));
		return $view->showTime();

	}

	public function forumHome () {
		$cats = [["Communauté", "Restez en contact avec l'ensemble de la communauté en vous exprimant sur des aspects du jeu (ou non)" ], ["Recherche De Groupe", "Rejoignez des groupes de joueurs qui correspondent à votre niveau en adhérant à des groupes ou en proposant vos services"]];

		$view = new Template("Forum:home", array("cat" => $cats));
		return $view->showTime();
	}


	}

?>