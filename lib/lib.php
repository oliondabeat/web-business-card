<?php

    //content and what not
    function displayContent($type, $pathToContent) {
        chdir($pathToContent);
        $file = $type . ".txt";
        $content = file_get_contents($file, false);
        print $content;
    }

    //mailing
    function sendMail($subject, $details) {
        $myEmail = "olivier.drouin@protonmail.com";
        $clientEmail = $details['email'];
        $clientName = $details['name'];
        $clientMessage = "message de " . $clientEmail . "\n" . $details['msg'];
        $response = getMessageContent($subject);
        if ($clientName != '') {
            $response = "Merci, " . $clientName . ", " . getMessageContent($subject);
            $clientMessage = "message de " . $clientName . "(" . $clientEmail . ")" . "\n" . $details['msg'];
        }
        //to client
        mail($clientEmail, messageSubject($subject), $response);
        //to me
        mail($myEmail, "nouveau message!", $clientMessage);
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