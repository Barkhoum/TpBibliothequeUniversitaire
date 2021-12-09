<?php
require 'base/dao.php';

function listeAllArticle(){
    $arts = getAllArticle();
    return $arts;
}
function nouvelarticle(){

    $id_livre = filter_input(INPUT_POST, 'id_livre');
    $titre_livre = filter_input(INPUT_POST, 'titre_livre');
    $genre = filter_input(INPUT_POST, 'genre') ;
    $auteur = filter_input(INPUT_POST, 'auteur');
    $date_parution = date("Y-m-d", 'date_parution');
    $editeur = filter_input(INPUT_POST, 'editeur');
    $genre = filter_input(INPUT_POST, 'genre'); 
    $collection = filter_input(INPUT_POST, 'collection') ;
    $extrait_livre = filter_input(INPUT_POST, 'extrait_livre'); 
    $photo_livre = $_FILES['photo']['name'];
    $param = pathinfo( '.', $photo_livre);
    $photo_livre = uniqid() . '.'. $param['extension'];

    insertArticle($id_livre, $titre_livre, $genre, $auteur, $date_parution, $editeur, $genre, $collection, $extrait_livre,$photo_livre);
    move_uploaded_file($_FILES['photo']['tmp_name'], 'upload/' .$photo_livre);
}