<header>
    <a href="<?= PATH . "/" ?>">
        <div class="left">
            <img src="<?= ASSET . 'Pics/logo.png' ?>">
            <h1>Bulletfire</h1>
        </div>    
    </a>
    

    <ul>

        <a href="<?= PATH . '/actu'?>"><li>Actualités</li></a>
        <a href="<?= PATH . '/forum'?>"><li>Forum</li></a>
        <a href="<?= PATH . '/shop'?>"><li>Boutique</li></a>
        <?php if(isset($_SESSION["Player"])) : ?>
        <a href="<?= PATH . '/shop/basket'?>"><li>Panier</li></a>
        
        <?php endif; ?>
    </ul>

    <div class="right" onclick="event.stopPropagation()">
        <?php if(isset($_SESSION["Player"])) : ?>
            <span class="player" onclick="openPlayerMenu(event)">
                <img src="#">
                <h2><?= $_SESSION["Player"]->getNickname() ?></h2>
            </span>
            <div class="playerMenu" id="playerMenu" onclick="event.stopPropagation()">
                <a href="<?= PATH . '/deconnect'?>">Déconnexion</a>
            </div>
        <?php else : ?>
            <a href="<?= PATH . '/login'?>"><li>Connexion</li></a>
        <?php endif; ?>

    </div>

</header>