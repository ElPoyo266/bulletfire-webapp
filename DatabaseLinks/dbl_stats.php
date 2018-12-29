<?php 


function getLeaderboard ($page) {
	global $db;
	$nb = 100*($page-1);
	$q = $db->prepare("SELECT nickname, rank FROM Player ORDER BY rank DESC LIMIT $nb,100");
	$q->execute([]);
	$res = [];
	while($r = $q->fetch()) {
		$res[] = $r;
	}
	$q->closeCursor();
	return $res;
}

function isPlayerExists ($pseudo) {
	global $db;
	$q = $db->prepare("SELECT Id FROM Player WHERE nickname = ?");
	$q->execute([$pseudo]);
	$res = null;
	if($q->rowCount() > 0) {
		$res = true;
	}
	$q->closeCursor();
	return $res;
}

function getPlayersByNickname ($pseudo) {
	global $db;
	$q = $db->prepare("SELECT nickname FROM Player WHERE nickname LIKE '%$pseudo%' LIMIT 0,10");
	$q->execute([]);
	$res = [];
	while($r = $q->fetch()) {
		$res[] = $r["nickname"];
	}
	$q->closeCursor();
	return $res;
}




?>