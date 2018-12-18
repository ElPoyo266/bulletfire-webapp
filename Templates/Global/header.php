<header>

    <ul>

        <a href="<?= PATH . '/actu'?>"><li>Actualités</li></a>
        <a href="<?= PATH . '/forum'?>"><li>Forum</li></a>
        <a href="<?= PATH . '/shop'?>"><li>Boutique</li></a>
        <?php if(isset($_SESSION["Player"])) : ?>
        <a href="<?= PATH . '/shop/basket'?>"><li>Panier</li></a>
        <a href="<?= PATH . '/deconnect'?>"><li>Déconnexion</li></a>
        <?php else : ?>
        <a href="<?= PATH . '/login'?>"><li>Connexion</li></a>
        <a href="<?= PATH . '/register'?>"><li>Créer un compte</li></a>
        <?php endif; ?>
    </ul>

</header>