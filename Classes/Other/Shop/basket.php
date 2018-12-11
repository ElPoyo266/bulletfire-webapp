<?php 

class Basket {

    private $products = new array();

    public function addProduct ($product, $quantity) {
        $this->products[$product->getName()] = array("product" => $product, "quantity" => $quantity);
    }

    public function removeProduct ($product) {
        unset($this->products[$product->getName()]);
    }

    public function clearProducts () {
        $this->products = new array();
    }

    public function addQuantity ($product) {
        $this->products[$product->getName()]["quantity"] += 1;
    }

    public function removeQuantity ($product) {
        $this->products[$product->getName()]["quantity"] -= 1;
    }

    public function getProducts () {
        return $this->products;
    }

    public function getVatPrice ($vatRate) {
        $vat = 0;
        foreach($this->products as $prod) {
            $vat += $prod["product"]->getPrice() * $vatRate;
        }
        return $vat;
    }

    public function getPrice () {
        $price = 0;
        foreach($this->products as $prod) {
            $price += $prod["product"]->getPrice();
        }
        return $price;
    }

}


?>