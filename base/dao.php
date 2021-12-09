<?php 

try {
 $bdd = new PDO('mysql:host=localhost;dbname=bd_biblio;charset=utf8', 'root', '');
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

function getPersonneByLogin($login)
{

    global $dbConnect;

    $sql = 'SELECT * FROM users WHERE nom_user= \'' . $login . '\'';

    $stat_pers = $bdd->query($sql);

    if ($stat_pers->rowCount() == 1) {
        $pers = $stat_pers->fetch(PDO::FETCH_ASSOC);
        return $pers;
    } else {
        //return false;
        $err = new Exception('Login incorrect');
        throw $err;
    }
}

function getAllArticle()
{

    global $bdd;

    $sql = 'SELECT * FROM livre';
    $stat_articles = $bdd->query($sql);
    $arts = $stat_articles->fetchAll(PDO::FETCH_ASSOC);

    return $arts;
}

function insertArticle($id_livre, $titre_livre, $genre, $auteur, $date_parution, $editeur, $genre, $collection, $photo_livre)
{

    global $dbConnect;

    $sql = 'INSERT INTO livre VALUES (null, :titre_livre, :genre, :auteur, :date_parution, :editeur, ;genre, :collection, :photo_livre );';
    $stat_art = $dbConnect->prepare($sql);

    $stat_art->bindParam(':titre_livre', $titre_livre);
    $stat_art->bindParam(':genre_livre', $genre);
    $stat_art->bindParam(':auteur',$auteur);
    $stat_art->bindParam(':date_parution', $date_parution);
    $stat_art->bindParam(':editeur', $editeur);
    $stat_art->bindParam(':genre', $genre);
    $stat_art->bindParam(':collection,', $collection);
    $stat_art->bindParam(':photo_livre,', $photo_livre);

    $stat_art->execute();
}
}
