<!DOCTYPE html>
<html>
    
    <head>

        <?php require("Templates/Global/head.php") ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bulletfire - Boutique</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="<?= ASSET . 'CSS/shop.css'?>" />
        <script src="<?= ASSET . 'JS/shop.js'?>"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    
    </head>
    
    <body>
        <?php require("Templates/Global/header.php") ?>
        <h3>Panier</h3>
        <main>
        <?php
        foreach($param["products"] as $p) : 
        ?>
            <div>
                <h2><?= $p->getName()?></h2>
                <img src="<?= $p->getPic()?>" alt="Pic">
                <h3><?= $p->getDesc()?></h3>
                <strong>Prix : <?= $p->getPrice()?></strong>
                <?php if(isset($_SESSION["Player"])) : ?>
                    <button type="button" onclick="addInBasket(<?= $p->getId() ?>)">Ajouter au panier</button>
                <?php endif; ?>
            </div>
        <?php 
        endforeach;
        ?>
        </main>
    </body>

</html>