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
				//Est-ce que le mot de passe et l'e-mail sont confirmés ?
				if ((($_POST['pwd']) === ($_POST['pwd1'])) and
				(($_POST['mail']) === ($_POST['mail1']))) 
				{
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
				} else {
					if (($_POST['pwd']) !== ($_POST['pwd1'])) {
						echo '<p>'.'Erreur : mots de passe entrés différents'.'<p>';
					}

					if (($_POST['mail']) !== ($_POST['mail1'])) {
						echo '<p>'.'Erreur : e-mails entrés différents'.'<p>';
					}
				}
			}

			$view = new Template("Global:account-creation");
			return $view->showTime();
		}

	public function ticketCreation(){
	//Est-ce que tous les champs sont remplis ?
		if (isset($_POST['titre']) and isset($_POST['contenu']))
		{
			insertNewTicket($_POST['titre'], $_POST['contenu']);
				if (isset($error)) {
					echo '<p>'.$error.'<p>';
				}
				else{
					echo 'Votre sujet a été inséré avec succès.';
				}
		}
		$view = new Template("Global:ticket-creation");
		return $view->showTime();
	}	

	public function recupTicket(){
		$envoi = array();
		if(isset($_GET['id']))
		{
			$envoi = selectTicket();
			$view = new Template("Global:ticket-view", array('ticket'=> $envoi));
			return $view->showTime();
		}
		if(isset($error))
		{
			echo '<p>'.$error.'</p>';
		}

	}

	public function recupTicketById(){
		$envoi = array();
		if(isset($_GET['id']))
		{
			$envoi = selectTicketbyId($_GET['id']);
			$view = new Template("Global:comment-view", array('ticket'=> $envoi));
			return $view->showTime();
		}
		if(isset($error))
		{
			echo '<p>'.$error.'</p>';
		}

	}

	public function recupComment(){
		$envoi = array();
		if(isset($_GET['id']))
		{	
			$envoi = selectComment($_GET['id']);
			$view = new Template("Global:comment-view", array('comment'=> $envoi));
			return $view->showTime();
		}
		if(isset($error))
		{
			echo '<p>'.$error.'</p>';
		}

	}


	}

?>