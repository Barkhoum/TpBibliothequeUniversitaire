<?php

switch ($action) {
    case 'login':
        $erreur = '';
        require 'modeles/ModelePersonne.php';
        login();
        break;
    case 'connexion':
        $erreur = '';
        $vue = 'form_login';
        break;

    default:
        # code...
        break;
}
