<?php 

use PayPal\Api\Transaction;

class TransactionFactory {

    static function fromBasket ($basket, $vatRate = 0) {
        $list = new \PayPal\Api\ItemList();
        foreach($basket->getProducts() as $prod){
            $product = $prod["product"];
            $item = (new \PayPal\Api\Item())
                ->setName($product->getName())
                ->setPrice($product->getPrice())
                ->setCurrency('EUR')
                ->setQuantity($prod["quantity"]);
            $list->addItem($item);
        }

        $details = (new \PayPal\Api\Details())
            ->setTax($basket->getVatPrice($vatRate))
            ->setSubtotal($basket->getPrice());

        $amount = (new \PayPal\Api\Amount())
            ->setTotal($basket->getPrice() + $basket->getVatPrice($vatRate))
            ->setCurrency("EUR")
            ->setDetails($details);

        return (new \PayPal\Api\Transaction())
            ->setItemList($list)
            ->setDescription('Achat sur Bulletfire.com')
            ->setAmount($amount)
            ->setCustom('demo-1');
    }

}

?> 