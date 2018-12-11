<?php 

    /* ###  Principal routes  ### */
    $routes->add("/shop", "Shop:shop");
    $routes->add("/shop/basket", "Shop:basket");
    $routes->add("/shop/validpay", "Shop:validPayment");
    $routes->add("/shop/cancelpay", "Shop:cancelPayment");
    $routes->add("/shop/pay", "Shop:payment");

    /* ###  Ajax routes  ### */
    $routes->add("/shop/addproduct", "Shop:ajaxAddProduct");
    $routes->add("/shop/removeproduct", "Shop:ajaxRemoveProduct");
    $routes->add("/shop/reduceproduct", "Shop:ajaxReduceProduct");
    $routes->add("/shop/increaseproduct", "Shop:ajaxIncreaseProduct");


?>