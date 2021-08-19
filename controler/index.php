<?php

require '../vendor/autoload.php';

$action = $_GET['action'];

if (isset($action)) {
    if ($actions == 'posts') { //Affiche tout les posts
        //Récupére tout les posts
        //Affiche les posts
        echo 'posts';
        var_dump(__DIR__);
    }
} else {
    require '../view/frontend/index.php';
}
