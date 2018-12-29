<?php 

$routes->add("/stats", "Stats:home");
$routes->add("/stats/leaderboard", "Stats:leaderboard");

$routes->add("/stats/user", "Stats:users");
$routes->add("/stats/user/{Userid}", "Stats:user");


?>