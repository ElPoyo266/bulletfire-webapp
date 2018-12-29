<?php 


class StatsController {

	public function home () {
		$view = new Template("Stats:home");
		return $view->showTime();
	}

	public function leaderboard () {
		$page = 1;

		if(isset($_GET["page"])) {
			$page = $_GET["page"];
			if(intval($page) == 0){
				$page = 1;
			}
		}

		$leaderboard = getLeaderboard($page);
		$first = 100 * ($page-1) + 1;
		$next = $page + 1;
		$prev = $page - 1;
		$view = new Template("Stats:leaderboard", array("leaderboard" => $leaderboard, "first" => $first, "next" => $next, "previous" => $prev));
		return $view->showTime();
	}

	public function users () {
		$res = null;
		if(isset($_GET["player"])) {
			$player = isPlayerExists($_GET["player"]);
			if($player != null) {
				header("Location: /stats/user/" . trim($_GET["player"]));
				exit(0);
			}else{
				$res = getPlayersByNickname($_GET["player"]);
			}
		}
		$view = new Template("Stats:users", array("res" => $res));
		return $view->showTime();
	}

	public function user ($userPseudo) {
		$view = new Template("Stats:user", array());
		return $view->showTime();
	}
}



?>