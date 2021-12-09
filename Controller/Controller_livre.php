<?php

switch ($action) {

    case 'nouveauLivre':
        require 'model/ModelUser.php';
        $vue = 'form_livre';
        break;
    case 'insertLivre':
        require 'model/ModelLivre.php';
        $vue = 'form_livre';
        break;
    default:
        # code...
        break;
}