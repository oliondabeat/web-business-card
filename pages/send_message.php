
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
    
        <div class="message">
            <?php //sendMail($_GET['subject'], $_POST); ?>
            <h1>Votre message a été envoyé!</h1>
            <h5 id="return_home"><script>returnToIndexCountdown(5);</script></h5>     
        </div>

    </body>

</html>
