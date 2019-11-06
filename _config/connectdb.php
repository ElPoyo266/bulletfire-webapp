<?php 

	try{
		$db = new PDO('mysql:dbname=' . DB . ';host=' . HOST, USER, PASS);
	}catch(PDOException $e){
		echo $e;
		die();
	}

	// If you need you can define other databases
