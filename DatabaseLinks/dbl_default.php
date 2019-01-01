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





	function insertNewTicket($auteur, $titre, $contenu, $idCat){
		global $db;
		$verif=false;
		$q = $db->prepare('SELECT titre FROM Billet');
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
			$q = $db->prepare("INSERT INTO Billet(auteur, titre, contenu, id_categorie) VALUES (?, ?, ?, ?)");
			$q->execute([htmlspecialchars($auteur), htmlspecialchars($titre),htmlspecialchars($contenu), htmlspecialchars($idCat)]);
		}

	}






	function selectTicket($id_cat){
		global $db;
		$recup = array();
		$q = $db->prepare('SELECT id, titre, auteur, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_cplt FROM Billet WHERE id_categorie = ? ORDER BY date_creation DESC');
		$q->execute([htmlspecialchars($id_cat)]);
		while($data = $q->fetch()){
			$recup[] = array("id"=>$data['id'],
					"auteur"=>$data['auteur'], 
					"titre"=>$data['titre'], 
					"contenu"=>$data['contenu'], 
					"date_creation_cplt"=>$data['date_creation']); 
		}
		$q->closeCursor();
		return $recup;
	}






	function selectTicketById($id){
		global $db;
		$recup = null;
		$q = $db->prepare("SELECT id, titre, auteur, contenu, DATE_FORMAT(date_creation, '%d/%m/%Y à %Hh%imin%ss') AS date_creation FROM Billet WHERE id = ? ORDER BY date_creation DESC");
		$q->execute([htmlspecialchars($id)]);
		$data = $q->fetch();
		$recup = array(
			"auteur"=>$data['auteur'],
			"titre"=>$data['titre'], 
			"contenu"=>$data['contenu'], 
			"date_creation_cplt"=>$data['date_creation']);
		$q->closeCursor();
		return $recup;
	}



	function selectComment($id){
		global $db;
		$com = array();
		$q = $db->prepare('SELECT titre, auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_com_cplt  FROM Commentaires WHERE id_billet = ?');
			$data = $q->execute($id);
			while($data = $q->fetch()){
				$com[] = array("auteur"=>$data['auteur'],
				"titre"=>$data['titre'], 
				"commentaire"=>$data['commentaire'], 
				"date_com_cplt"=>$data['date_commentaire']);
			}
		$q->closeCursor();
		return $com;
	}
    

	function insertNewComment($id_billet, $titre, $commentaire){
		global $db;
		$q = $db->prepare("INSERT INTO Commentaires(id_billet, auteur, commentaire) VALUES (?, ?, ?)");
		$q->execute([htmlspecialchars($id_billet),htmlspecialchars($auteur),htmlspecialchars($commentaire)]);
		$q->closeCursor();
	}
	

?> 