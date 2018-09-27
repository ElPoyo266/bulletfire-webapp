<?php 
	

	// This is a demo class for your users the variables should be on your database
	/*
	You should create an entity for each table you have in your database except for link tables
	*/
	class Player {

		// Variables ...
		private $nickname = null;
		private $surname = null;
		private $name = null;
		private $mail = null;
		private $pwd = null;
		private $admin = null;
		private $kda = null;
		private $killnb = null;
		private $playtime = null;
		private $winrate = null;
		private $accuracy = null;
		private $headshotrate = null;
		// ... END

		// Constructor ...
		public function __construct ($nickname = null, $surname = null, $name = null, $mail = null, $pwd = null) {
			$this->nickname = $nickname;
			$this->surname = $surname;
			$this->name = $name;
			$this->mail = $mail;
			$this->pwd = $pwd;
			$this->admin = 0;
			$this->kda = 0;
			$this->killnb = 0;
			$this->playtime = '00:00:00';
			$this->winrate = 0;
			$this->accuracy = 0;
			$this->headshotrate = 0;
		}
		// ... END

		// Setters ...
		public function setNickname ($nickname) {
			$this->nickname = $nickname;
		}

		public function setSurname ($surname) {
			$this->surname = $surname;
		}

		public function setName ($name) {
			$this->name = $name;
		}

		public function setMail ($mail) {
			$this->mail = $mail;
		}

		public function setPwd ($pwd) {
			$this->pwd = $pwd;
		}
		public function setAdmin ($admin) {
			$this->admin = $admin;
		}

		public function setKda ($kda) {
			$this->kda = $kda;
		}

		public function setKillnb ($killnb) {
			$this->killnb = $killnb;
		}

		public function setPlaytime ($playtime) {
			$this->playtime = $playtime;
		}

		public function setWinrate ($winrate) {
			$this->winrate = $winrate;
		}

		public function setAccuracy ($accuracy) {
			$this->accuracy = $accuracy;
		}

		public function setHeadshotrate ($headshotrate) {
			$this->headshotrate = $headshotrate;
		}
		// ... END

		// Getters ...
		public function getNickname () {
			return $this->nickname;
		}

		public function getSurname () {
			return $this->surname;
		}

		public function getName () {
			return $this->name;
		}

		public function getMail () {
			return $this->mail;
		}

		public function getPwd () {
			return $this->pwd;
		}
		public function getAdmin () {
			return $this->admin;
		}

		public function getKda () {
			return $this->kda;
		}

		public function getKillnb () {
			return $this->killnb;
		}

		public function getPlaytime () {
			return $this->playtime;
		}

		public function getWinrate () {
			return $this->winrate;
		}

		public function getAccuracy () {
			return $this->accuracy;
		}

		public function getHeadshotrate () {
			return $this->headshotrate;
		}
		// ... END
	}

?>