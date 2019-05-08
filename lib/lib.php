<?php

    //content and what not
    function displayContent($type, $pathToContent) {
        chdir($pathToContent);
        $file = $type . ".txt";
        $content = file_get_contents($file, false);
        print $content;
    }

    //dynamic contact page
    function messageSent($subject) {
        switch ($subject) {
            case "techsup" :
                echo "Soutien technique: envoyé avec succès!";
                break;
            case "pc" :
                echo "Bien reçu! Je te reviens là dessus sous peu!";
                break;
            case "crypto" :
                echo "Vous êtes venu au bon endroit!";
                break;
            case "other" :
                echo "Merci!";
                break;
        }
    }

    //mailing
    function sendMail($subject, $details) {
        $myEmail = "olivier.drouin@protonmail.com";
        $destinationEmail = $details['email'];
        $message = getMessageContent($subject);
        mail()
    }

    function processMessage($formData) {
        $out = [];
        $email = $formData['email'];
        $msg = $formData['msg'];
        $name = $formData['name'];   
    }

    //utility
    function getMessageContent($subject) {
        $messageDir = "../content/mail/";
        return file_get_contents($messageDir . $subject . ".txt", true);
    }

    function messageSubject($subject) {
        $out = "";
        switch ($subject) {
            case "techsup" :
                $out = "Support Technique👨‍💻";
                break;
            case "pc" :
                $out = "Tout ce qui est PC🖥🛠";
                break;
            case "crypto" :
                $out = "Info-Crypto⛏";
                break;
            case "other" :
                $out = "N'importe quoi📧";
                break;
        }
        return $out;
    }
?>