<?php

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'posts') { //Affiche tout les posts
        //Récupére tout les posts
        //Affiche les posts
        echo 'posts';
    }
} else {
    require '../view/frontend/index.php';
}
