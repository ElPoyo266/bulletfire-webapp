<?php 

class Product {

    private $name;
    private $price;
    private $desc;
    private $pic;
    private $type; // Soit 1 pour les coffres ou 2 pour la money
    private $quantity; // Combien de coffres ou de money

    public function __constructor ($name, $price, $desc, $pic, $type, $quantity){
        $this->name = $name;
        $this->price = $price;
        $this->desc = $desc;
        $this->pic = $pic;
        $this->type = $type;
        $this->quantity = $quantity;
    }

    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of desc
     */ 
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Get the value of pic
     */ 
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }
}



?>