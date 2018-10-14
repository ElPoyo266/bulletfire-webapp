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
		echo $pwd;
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
			echo $pwd;
			$q->execute([htmlspecialchars($nickname),htmlspecialchars($surname),htmlspecialchars($name),htmlspecialchars($mail),$pwd]);
		}
	}

	function newsletterSub ($mail) {
		global $db;
		$q = $db->prepare("INSERT INTO Newsletter(mail) VALUES (?)");
		$q->execute([htmlspecialchars($mail)]);
	}
?> 