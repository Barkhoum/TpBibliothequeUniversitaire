<?php
require 'base/dao.php';


function login()
{
    global $vue;
    global $erreur;

    $login = $_POST['login'];

    try {
        $personne = getPersonneByLogin($login);
        $_SESSION['user'] = $personne['nom'];
        $vue = '/view/home/home.php';
    } catch (Exception $e) {
        $erreur = $e->getMessage();
        $vue = '/view/home/form_login.php';
    }
}
