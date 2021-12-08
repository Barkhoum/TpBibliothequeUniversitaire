<?php
global $action;
switch ($action) {

    case 'user':
        require 'model/modeleUser.php';
        $users = listeAllUser();
        $vue = 'user';
        break;

    default:
        # code...
        break;
}
