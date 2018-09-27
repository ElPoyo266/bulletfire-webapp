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
    function getUserById ($userId) {
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
		try {
			$q = $db->prepare("INSERT INTO Player(nickname, surname, `name`, mail, pwd) VALUES (?, ?, ?, ?, ?)");
			$q->execute([htmlspecialchars($nickname),htmlspecialchars($surname),htmlspecialchars($name),htmlspecialchars($mail),htmlspecialchars($pwd)]);
		}
		catch(PDOException $e)
		{
			$erreur = $e->getMessage();
		}
	}

	function newsletterSub ($mail) {
		global $db;
		try {
			$q = $db->prepare("INSERT INTO Newsletter(mail) VALUES (?)");
			$q->execute([htmlspecialchars($mail)]);
		}
		catch(PDOException $e)
		{
			$erreur = $e->getMessage();
		}
	}
?> 