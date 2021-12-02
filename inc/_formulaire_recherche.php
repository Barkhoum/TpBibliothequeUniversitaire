<?php
?>

<main class="container-fluid">
    <section class="row form_recherche  justify-content-center">
        <div class="col-2 bg_form_img text-center">
            <img class="m-5" src="livres_seach.png" alt="photo d'une femme">
        </div>
        <div id='form_seach' class="col-5 bg_form">
            <main class="container-fluid m-5">
                <h2>Recherchez votre ouvrage </h2>
                <form method="get" action="" class="row  ">
                    <div class="mb-3 col-10">
                        <div class="mb-3 col">
                            <label for="recherche_livre" class="form-label "></label>
                            <input type="text" class="form-control" name="recherche_livre" id="recherche_livre" placeholder="Chercher un livre">
                        </div>
                        <div class="mb-3 col">
                            <label for="ouvrages" class="form-label"></label>
                            <input type="text" class="form-control" name="ouvrages" id="ouvrages" placeholder="Recherche par ouvrages">
                        </div>
                        <div class="mb-3 col">
                            <label for="auteurs" class="form-label"></label>
                            <input type="text" class="form-control" name="auteurs" id="auteurs" placeholder="rechercher par auteurs">
                        </div>
                        <div class="mb-3 col">
                            <label for="editeurs" class="form-label"></label>
                            <input type="text" class="form-control" name="editeurs" id="editeurs" placeholder="rechercher par editeurs">
                        </div>
                        <button type="submit" class="btn btn-primary">Rechercher</button>
                    </div>
                </form>
        </div>
        <aside class="col-2 bg_form ">

            <h5>Catégories principales</h5>
            <ul class="col list-unstyled">
                <li>Généralités</li>
                <li>Philosophie, psychologie, religion</li>
                <li>Sciences auxiliaires de l’histoire</li>
                <li>Histoire (sauf celle de l’Amérique)</li>
                <li>Histoires des Amériques </li>
                <li>Histoire des Amériques </li>
                <li>Géographie, anthropologie, loisirs</li>
                <li>Sciences sociales</li>
                <li>Sciences politiques</li>
                <li>Droit</li>
                <li>Éducation</li>
                <li>Musique</li>
                <li>Beaux-arts</li>
                <li>Langage et littérature</li>
                <li>Sciences et mathématiques</li>
                <li>Médecine</li>
                <li>Agriculture</li>
                <li>Technologie</li>
                <li>Science militaire</li>
                <li>Science navale</li>
                <li>Bibliographie, bibliothéconomie</li>


            </ul>
        </aside>
    </section>
</main>