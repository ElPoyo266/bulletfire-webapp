<?php 

class ActuController {

    public function home () {
        $actu = getAllArticles();
        $view = new Template("Actu:home", array("actu" => $actu));
        return $view->showTime();
    }

    public function actu ($id) {
        $actu = geActuById($id);
        $view = new Template("Article:" . $actu->getPath(), array("actu" => $actu));
        return $view->showTime();
    }

}




?>