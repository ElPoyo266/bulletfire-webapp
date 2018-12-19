<?php 

class Article {

    private $id = null;
    private $title = null;
    private $cat = null;
    private $path = null;
    private $pic = null;
    private $date = null;

    public function __construct ($id, $title, $cat, $path, $pic, $date) {
        $this->id = $id;
        $this->title = $title;
        $this->cat = $cat;
        $this->path = $path;
        $this->pic = $pic;
        $this->date = $date;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of cat
     */ 
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Set the value of cat
     *
     * @return  self
     */ 
    public function setCat($cat)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get the value of path
     */ 
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set the value of path
     *
     * @return  self
     */ 
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get the value of pic
     */ 
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set the value of pic
     *
     * @return  self
     */ 
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}



?>