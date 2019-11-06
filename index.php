<?php

// User Entity (for connection)
require "Classes/Entities/player.php";
require "Classes/Other/Shop/basket.php";
require "Classes/Other/Shop/product.php";
// End

session_start();

// Config
require "_config/hide/route.php";
require "_config/hide/template.php";
require "_config/hide/controller.php";
require "_config/hide/services.php";
require "_config/hide/dblink.php";
require "_config/hide/config.php";
// End

require "Config/global.php";

// Your script(s) to interact with the database(s)
require "_config/connectdb.php";
// End

$routes->submit();


git filter-branch --force --index-filter 'git rm --cached --ignore-unmatch Assets/Pics/demande_convention.pdf' --prune-empty --tag-name-filter cat -- --all