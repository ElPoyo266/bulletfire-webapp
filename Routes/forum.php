<?php 


    $routes->add("/forum/newpost", "Default:ticketCreation");
	$routes->add("/forum/{idCat}", "Default:recupTicket");
	$routes->add("/forum/post/{idPost}", "Default:CommentPost");
	$routes->add("/forum", "Default:forumHome");



?>