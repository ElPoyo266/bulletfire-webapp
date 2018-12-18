<header>

    <ul>

        <a href="<?= PATH . '/actu'?>"><li>Actualités</li></a>
        <a href="<?= PATH . '/forum'?>"><li>Forum</li></a>
        <a href="<?= PATH . '/shop'?>"><li>Boutique</li></a>
        <?php if(isset($_SESSION["Player"])) : ?>
        <a href="<?= PATH . '/shop/basket'?>"><li>Panier</li></a>
        <?php endif; ?>
    </ul>

</header>