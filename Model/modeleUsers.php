<?php
require 'dao.php';


function listeAllUser()
{

    $users = getAllUsers();

    return $users;
}
