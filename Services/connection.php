<?php 

    function requireConnection ($page = "") {
        $player = checkConnection();
        if($player != false) {
            return $player;
        }else{
            header("Location: " . SITEPATH . $page);
        }
    }

    function requireNoConnection ($page = "") {
        $player = checkConnection ();
        if($player != false) {
            header("Location: " . SITEPATH . $page);
        }
    }

    function checkConnection () {
        if(isset($_SESSION["Player"])) {
            return $_SESSION["Player"];
        }else{
            return false;
        }
    }

?>