<html>

    <head>
        <script src="../lib/lib.js"></script>
        <link rel="stylesheet" type="text/css" href="../lib/style.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Me rejoindre</title>
    </head>

    <body>

        <?php include "../lib/lib.php"; ?>

        <div class="topbar">
            <a href="#">Rejoindre</a>
            <a id="homebutton" href="../index.php">Retour</a>
            <div class="dropdown">
                <button class="dropbutton">Services</button>
                    <div class="dropcontent">
                        <a href="contact.php?subject=techsup">Soutien Technique</a>
                        <a href="contact.php?subject=pc">Construction et Reparation PC</a>
                        <a href="contact.php?subject=crypto">Cryptomonnaie et Mining</a>
                        <a href="contact.php?subject=other">Autres</a>
                    </div>
            </div>
            <a href="pages/testimonials.php">Témoignages</a> 
        </div>

        <div class="main">

            <div class="center">
                <img class="image" src="../img/moi.jpg" alt="soooooo ugly!">
                <h2 class="desc">
                    <?php displayContent("contact", "../content"); ?>
                </h2>
                <form action="send_message.php?subject=<?php echo $_GET['subject'] ?>" method="post" id="msg">
                    Nom: <input type="text" name="name" placeholder="(facultatif)" style="float: right"><br>
                    <br>
                    Courriel: <input type="text" name="email" placeholder="(requis)" style="float: right"><br>
                    <br>
                    <textarea placeholder="Votre message:" name="msg" form="msg"></textarea><br>
                    <br>
                    <input id="form_submit" type="submit" value="Envoyer">
                </form>
            </div>

            <div class="side">
            </div>

        </div>

    </body>

</html>