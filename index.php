<!DOCTYPE html>

<html>

    <head>
        <script src="lib/lib.js"></script>
        <link rel="stylesheet" type="text/css" href="lib/style.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Wagwan</title>

    </head>

    <body>

        <?php include "lib/lib.php"; ?>

        <div class="topbar">
            <a href="pages/contact.*">Rejoindre</a>
            <a id="homebutton" href="<?php echo homePage($homeDir); ?>">Retour</a>
            <div class="dropdown">
                <button class="dropbutton">Services</button>
                    <div class="dropcontent">
                        <a href="">Soutien Technique</a>
                        <a href="">Construction et Reparation PC</a>
                        <a href="">Cryptomonnaie et Mining</a>
                        <a href="">Autres</a>
                    </div>
            </div>  
        </div>

        <div class="main">

            <div class="center">
                <img class="image" src="img/moi.jpg" alt="soooooo ugly!">
                <h1 class="name"> Olivier Drouin </h1>
                <h5 class="desc">
                    <?php displayContent("description", getcwd()); ?>
                </h5>
            </div>

            <div class="side">
            </div>

        </div>

    </body>

</html>