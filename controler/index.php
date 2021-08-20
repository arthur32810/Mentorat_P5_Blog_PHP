<?php

require_once('../vendor/autoload.php');

$action = filter_input(INPUT_GET, 'action');

if ($action) {
    if ($action == 'posts') { //Affiche tout les posts
        //Récupére tout les posts
        //Affiche les posts
        echo 'posts';
        var_dump(__DIR__);
    } else {
        //Erreur 404
        echo '404';
    }
} else {
    require('../view/frontend/index.php');
}
