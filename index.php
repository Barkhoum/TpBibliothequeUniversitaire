<?php
session_start();
$vue = '';

if (empty($_GET)) {
    $entite = '';
    $action = './';
} else {
    $entite = $_GET['entite'];
    $action = $_GET['action'];
}
try {
    switch ($entite) {
        case 'personne':
            require '/Controller/controller_user.php';
            break;

        default:
            $vue = 'home';
            break;
    }
} catch (PDOException $err){
    $vue = 'erreur';
}

require 'View/template.php';
