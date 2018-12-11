<?php 

    public function tryToConnect ($pseudo, $pass) {
        global $db;
        $pass = hash("sha256", $pass);
        $q = $db->prepare("SELECT * FROM Player WHERE nickname = ? AND pwd = ?");
        $q->execute([$pseudo, $pass]);
        if($q->rowCount() == 0) {
            $q->closeCursor();
            return null;
        }else{
            $r = $q->fetch();
            $player = new Player ($r["nickname"], $r["surname"], $r["name"], $r["mail"], $r["pwd"], $r["admin"], $r["Id"]);
            $q->closeCursor();
            return $player;
        }
    }


?>