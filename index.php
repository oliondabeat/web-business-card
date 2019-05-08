<!DOCTYPE html>

<html>

    <head>
        <script src="lib/lib.js"></script>
        <link rel="stylesheet" type="text/css" href="lib/style.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Wagwan</title>
        <?php

        ?>
    </head>

    <body>

        <?php include "lib/lib.php"; ?>

        <div class="topbar">
            <a href="pages/contact.php">Rejoindre</a>
            <a id="homebutton" href="#">Retour</a>
            <div class="dropdown">
                <button class="dropbutton">Services</button>
                    <div class="dropcontent">
                        <a href="pages/contact.php?subject=techsup">Soutien Technique</a>
                        <a href="pages/contact.php?subject=pc">Construction et Reparation PC</a>
                        <a href="pages/contact.php?subject=crypto">Cryptomonnaie et Mining</a>
                        <a href="pages/contact.php">Autres</a>
                    </div>
            </div>
            <a href="pages/testimonials.php">Témoignages</a> 
        </div>

        <div class="main">

            <div class="center">
                <img class="image" src="img/moi.jpg" alt="soooooo ugly!">
                <h1 class="name"> Olivier Drouin </h1>
                <h5 class="desc">
                    <?php displayContent("description", "content"); ?>
                </h5>
            </div>

            <div class="side">
            </div>

        </div>

    </body>

</html>