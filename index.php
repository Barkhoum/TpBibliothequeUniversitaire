<?php
session_start();
$vue = '';

if (empty($_GET)) {
    $entite = '';
    $action = '/view/inc/_formulaire_recherche.php';
} else {
    $entite = $_GET['entite'];
    $action = $_GET['action'];
}
try {
    switch ($entite) {
        case 'article':
            require 'controller/Controller_livre.php';
            break;

        case 'personne':
            require 'controller/Controller_user.php';
            break;

        default:
            $vue = '/view/inc/_formulaire_recherche.php';
            break;
    }
} catch (PDOException $err) {
    $vue = 'erreur';
}
require 'View/template.php';
/// il faut regrouper les fichiers model.php et templade