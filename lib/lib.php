<?php

    $homeDir = getcwd();

    function homePage($homeDir) {
        return $homeDir;
    }

    function displayContent($type, $indexDir) {
        chdir($indexDir) && chdir('content');
        $file = $type . ".txt";
        $content = file_get_contents($file, false);
        print "<h5>" . $content . "</h5>";
    }

?>