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
			if (isset($_POST['nickname']))&&(isset($_POST['pwd']))&&(isset($_POST['mail']))&&(isset($_POST['surname']))&&(isset($_POST['name'])))&&(($_POST['pwd'])===($_POST['pwd1']))&&(($_POST['mail'])===($_POST['mail1']))
			// Conditions : Est-ce que tous les champs sont remplis ? et Est-ce que le mot de passe et l'e-mail sont confirmés ?
			{
				//Appel de la fonction pour insérer un nouveau joueur dans la table Joueur
				insertNewPlayer ($_POST['nickname'], $_POST['surname'], $_POST['name'], $_POST['mail'], $_POST['pwd']);
			}
			if  (isset($_POST['newsletter'])) 
			// Si le nouveau joueur a coché "Je veux m'inscrire à la newsletter"
			{
				// Appel de la fonction pour insérer son e-mail dans la table Newsletter
				newsletterSub ($_POST['mail']);
			}
			$view = new Template("Global:account-creation");
			return $view->showTime();
		}
	}

?>