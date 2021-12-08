<?php 

try {
 $bdd = new PDO('mysql:host=localhost;dbname=bd_biblio;charset=utf8', 'root', '');
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

function getAllUsers()
{
    global $bdd;

    $sql = 'SELECT * FROM users';
    $stat_user = $bdd->query($sql);
    $users = $stat_user->fetchAll(PDO::FETCH_ASSOC);

    return $users;
}
