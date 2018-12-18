<?php 

    class UserController {

        public function connection () {
            requireNoConnection();
            $error = false;
            if(isset($_POST["username"]) && isset($_POST["password"])) {
                $player = tryToConnect($_POST["username"], $_POST["password"]);
                if($player == null) {
                    $error = true;
                }else{
                    $_SESSION["Player"] = $player;
                    header("Location: ./");
                    exit(0);
                }
            }

            $view = new Template("User:connection", array("error" => $error));
            return $view->showTime();
        }

        public function deconnection () {
            $player = requireConnection();
            unset($_SESSION["Player"]);
            header("Location: /");
            exit(0);
        }
    }


?>