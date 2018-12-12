<!DOCTYPE html>
<html>
    
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bulletfire - Boutique</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="<?= ASSET . 'CSS/shopHome.css'?>" />
        <script src="<?= ASSET . 'JS/shop.js'?>"></script>
    
    </head>
    
    <body>

        <?php
        foreach($param["products"] as $p) : 
        ?>
            <div>
                <h2><?= $p->getName()?></h2>
                <h3><?= $p->getDesc()?></h3>
                <img src="<?= $p->getPic()?>" alt="Pic">
                <strong>Prix : <?= $p->getPrice()?></strong>
                <?php if(isset($_SESSION["Player"])) : ?>
                    <button type="button">Ajouter au panier</button>
                <?php endif; ?>
            </div>
        <?php 
        endforeach;
        ?>

    </body>

</html>