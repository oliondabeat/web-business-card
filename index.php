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

        <div name="header">

            <div class="dropdown">
                <button class="dropbutton">Services</button>
                <div class="dropcontent">
                    <a href="">Soutien Technique</a>
                    <a href="">Construction et Reparation PC</a>
                    <a href="">Consultation Cryptomonnaie et Mining</a>
                    <a href="">Autres</a>
                </div>
            </div>

            <div class="static">
                <button class="staticbutton"><a href="pages/contact.*">Rejoindre</a></button>
            </div>

        </div>

        <div name="main">

            <div class="center">

                <ul>
                    <li class="image">
                        <img src="img/moi.jpg" alt="soooooo ugly!">
                    </li>
                    <li class="name">   
                        <h1> Olivier Drouin </h1>
                    </li>

                    <li class="desc">
                        <?php displayContent("description", getcwd()); ?>
                    </li>
                </ul>

            </div>

            <div class="side">
            </div>

        </div>

    </body>

</html>