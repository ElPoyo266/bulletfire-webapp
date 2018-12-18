<?php 

    $routes->add("/login", "User:connection");
    $routes->add("/register", "Default:accountCreation");
    $routes->add("/deconnect", "User:deconnection");


?>