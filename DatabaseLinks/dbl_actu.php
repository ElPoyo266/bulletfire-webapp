<?php 


    function getAllArticles () {
        global $db;
        $q = $db->prepare("SELECT * FROM Article");
        $q->execute([]);
        $res = [];
        require_once "Classes/Entities/article.php";
        while($r = $q->fetch()) {
            $res[] = new Article ($r["Id"], $r["Title"], $r["Cat"], $r["Path"], $r["Pic"], $r["Date"]);
        }
        $q->closeCursor();
        return $res;
    }

    function geActuById ($id) {
        global $db;
        $q = $db->prepare("SELECT * FROM Article WHERE Id = ?");
        $q->execute([$id]);
        if($q->rowCount() > 0) {
            require_once "Classes/Entities/article.php";
            $r = $q->fetch();
            $res = new Article ($r["Id"], $r["Title"], $r["Cat"], $r["Path"], $r["Pic"], $r["Date"]);
            $q->closeCursor();
            return $res;
        }else{
            $q->closeCursor();
            return null;
        }
    }




?>