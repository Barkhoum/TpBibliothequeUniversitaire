<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Parcours Média</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="container-fluid m-0 p-0">
        <div class="row ">
            <div class="col-10">
                <img src="./logov2.png">
            </div>
            <div class="col-2">
                <a href="pages/connexion.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Connexion lecteur</a>
            </div>
        </div>
        <nav class="bg-danger p-2">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Infos pratique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="catégories.php">Ouvrages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Editeurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Auteurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
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
    <footer class="container-fluid">
        <div class="row col-10 d-flex justify-content-center text-white">

            <ul class="col list-unstyled">
                <h5>à propos</h5>
                <li>informations générales</li>
                <li>la bibliotheque</li>
                <li>l'nscription</li>
                <li>conditions d'emprunt</li>

            </ul>

            <ul class="col list-unstyled">
                <h5>nous joindre</h5>
                <li>bensoin d'aides</li>
                <li>collections</li>
                <li>text</li>
                <li>Engagement</li>

            </ul>
            <address class="col ">
                <h5>bibliothèque universitaire</h5>
                <p>899 BD des verdoises</br>91350 Juvisy Sur Orge</br>
                    <a href="mailto:info@bu-juvisy.com">info@bu-juvisy.com</a><br>
                    Tel. : 01 60 60 60 60
                </p>
            </address>
        </div>
        <div class=" text-center bg-black text-white ">
            © 2021 Bibliothèque universitaire de Juvisy sur Orge
        </div>
    </footer>
    <script src='app.js'></script>
</body>

</html>