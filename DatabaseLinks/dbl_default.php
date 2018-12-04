<?php 
	// This is a demo of a database link script

	/* 
	You can create as much script as you want
	then you can call these functions in your controllers
	*/


	// This is an example about how you can get a user with his ID
	/*
	You must start by declare your database as global then execute your query
	and don't forget to require_once your entities if you need them
	*/
    function getUserByNickname ($nickname) {
		global $db;
		$q = $db->prepare("SELECT * FROM user WHERE ID_User = ?");
		$q->execute([$userId]);
		$res = $q->fetch();
		require_once("Classes/Entities/user.php");
		$user = new User($res["ID_User"], $res["Mail"], $res["Pass"], $res["Pseudo"], $res["Pic"]);
		$q->closeCursor();
		return $user;
	}

	function insertNewPlayer ($nickname, $surname, $name, $mail, $pwd) {
		global $db;
		$verif=false;
		$q = $db->prepare('SELECT nickname
                         		FROM Player');
	 	$q->execute();
	 	while ($data = $q->fetch())
		{
		    if ($data === $nickname) {
		    	$verif = true;
		    	return 'Erreur : pseudo déjà utilisé';
		    }
		}
		if ($verif === false) {
			$q->closeCursor();
			$q = $db->prepare("INSERT INTO Player(nickname, surname, name, mail, pwd) VALUES (?, ?, ?, ?, ?)");
			$q->execute([htmlspecialchars($nickname),htmlspecialchars($surname),htmlspecialchars($name),htmlspecialchars($mail),$pwd]);
		}
	}

	function newsletterSub ($mail) {
		global $db;
		$q = $db->prepare("INSERT INTO Newsletter(mail) VALUES (?)");
		$q->execute([htmlspecialchars($mail)]);
	}

	function insertNewTicket($titre, $contenu){
		global $db;
		$verif=false;
		$q = $db->prepare('SELECT titre
                         		FROM Billet');
	 	$q->execute();
	 	while ($data = $q->fetch())
		{
		    if ($data === $titre) {
		    	$verif = true;
		    	return 'Erreur : Titre déjà existant. Merci de consulter les sujets.';
		    }
		}
		if ($verif === false) {
			$q->closeCursor();
			$q = $db->prepare("INSERT INTO Billet(nickname, titre, contenu) VALUES (?, ?, ?)");
			$q->execute([$nickname, htmlspecialchars($titre),htmlspecialchars($contenu)]);
		}

	}
	function selectTicket(){
		global $db;
		$recup = array();
		$q = $db->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date_billet, 
									DATE_FORMAT(date_creation, \'%Hh%imin%ss\') AS heure_billet 
								FROM Billet
								ORDER BY date_creation DESC');
		while($data = $q->fetch()){
			$recup[] = array("id"=>$data['id'] , 
					"titre"=>$data['titre'], 
					"contenu"=>$data['contenu'], 
					"dateBillet"=>$data['date_billet'], 
					"heureBillet"=>$data['heure_billet']);
		}
		$q->closeCursor();
		return $recup;
	}

	function selectTicketById($id){
		global $db;
		$recup = array();
		$q = $db->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date_billet, 
									DATE_FORMAT(date_creation, \'%Hh%imin%ss\') AS heure_billet 
								FROM Billet
								WHERE id = ? 
								ORDER BY date_creation DESC');

		$q->execute(htmlspecialchars($id));
		$q->fetch();
		$recup[] = array("titre"=>$data['titre'], 
			"contenu"=>$data['contenu'], 
			"dateBillet"=>$data['date_billet'], 
			"heureBillet"=>$data['heure_billet']);
	}

	function insertNewComment($titre, $contenu){
		global $db;
			
			$q = $db->prepare("INSERT INTO Billet(id_billet, nickname, contenu) VALUES (?, ?, ?)");
			$q->execute([$nickname,htmlspecialchars($contenu)]);
			$q->closeCursor();

	}

	function selectComment($id){
		$com = array();
		$q = $db->prepare('SELECT titre, auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y\') AS date_commentaire, DATE_FORMAT(date_commentaire, \'%Hh%imin%ss\') AS heure_commentaire FROM Commentaires WHERE id = ?');
			$data = $q->execute(array($_GET['id']));
			while($data = $q->fetch()){
			$com[] = array("titre"=>$data['titre'], 
					"auteur"=>$data['auteur'], 
					"commentaire"=>$data['commentaire'], 
					"dateCom"=>$data['date_commentaire'],
					"heureCom"=>$data['heure_commentaire']);
		}
		$q->closeCursor();
		return $com;
	}
    

?> 