<?php

ob_start();

if (isset($_GET['url'])) {
    $url = $_GET['url'];
} else {
    $url = "listeAmpoule";
}

if ($url == 'listeAmpoule') {
    require "listeAmpoule.php";
} elseif($url == "typedampoule"){
    require "https://www.silamp.fr/culot-ampoule";
}

$content = ob_get_clean();

require "template.php";