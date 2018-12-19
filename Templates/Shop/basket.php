<!DOCTYPE html>
<html>
    <head>

        <?php require("Templates/Global/head.php") ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bulletfire - Panier</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="<?= ASSET . 'CSS/basket.css' ?>" />
        <script src="<?= ASSET . 'JS/basket.js' ?>"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

    </head>

    <body>
        <?php require("Templates/Global/header.php") ?>
        <h3>Panier</h3>
        <?php 
        $nb = 0;
        foreach($param["basket"]->getProducts() as $p) :
        ?>
            <div id="prod_<?= $p["product"]->getId() ?>">
                <h3><?= $p["product"]->getName() ?></h3>
                <button type="button" class="littlebut" onclick="decreaseProd(<?= $p["product"]->getId() ?>)">-</button>
                <strong quantity>Quantité : <?= $p["quantity"] ?></strong>
                <button type="button" class="littlebut" onclick="increaseProd(<?= $p["product"]->getId() ?>)">+</button>
                <button type="button" class="littlebut remove" onclick="removeFromBasket(<?= $p["product"]->getId() ?>)">X</button>
            </div>
        <?php
            $nb++;
        endforeach;
        ?>
        <?php
        if($nb == 0) : 
        ?>
            <h3>Aucun article dans le panier</h3>
        <?php
        endif;
        ?>

        <?php
        if($nb > 0) :
        ?>
        <div>
            <h3>Total : </h3>
            Prix : 
            <?= $param["basket"]->getPrice() ?>
            <a href="<?= PATH . 'pay'?>" class="but">Payer avec PayPal</a>
        </div>
        <?php 
        endif;
        ?>
        
    </body>

</html>