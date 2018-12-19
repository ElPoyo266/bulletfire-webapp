<!DOCTYPE html>
<html>

    <head>

        <?php require("Templates/Global/head.php") ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bulletfire - Connection</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="<?= ASSET . 'CSS/connection.css' ?>" />

    </head>

    <body>
        <?php require("Templates/Global/header.php") ?>
        <div>
            <form method="post">

                <h3>Connexion</h3>

                <span>
                    
                    <?php
                        if($param["error"]) : 
                    ?>
                            <strong>Pseudo ou mot de passe incorrect</strong>
                    <?php 
                        endif;
                    ?>

                    <label for="username">Pseudo : 
                        <input type="text" name="username" id="username">
                    </label>

                    <label for="password">Mot de passe : 
                        <input type="password" name="password" id="password">
                    </label>
                    
                    <button type="submit" class="button">Se connecter</button>    

                </span>
                

                <a href="<?= PATH .'/register' ?>">Créer un compte</a>

            </form>
        </div>

    </body>

</html>