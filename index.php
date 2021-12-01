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
    <header class="container-fluid">
        <div class="row">
            <div class="col-8">
                <img src="./logov2.png">
            </div>
            <div class="col-4">
                <ul class="nav justify-content-end">
                    <li class="nav-item">Espace membres
                        <a class="nav-link " href="#">Connexion</a>
                    </li>
                </ul>
            </div>

        </div>
        <nav class="bg-danger">
            <ul class="nav justify-content-end">

                <li class="nav-item">
                    <a class="nav-link active" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Infos pratique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ouvrages</a>
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
    <main class="container-fluid m-2">
        <section class="row form_recherche">
            <div class="col-3 bg_form_img">
                <img class="m-5" src="image23.jpg" alt="photo d'une femme">
            </div>
            <div class="col-5 bg_form">
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
            <aside class="col-3 bg_form">
                <div class="mt-5 ">
                    <h1>Inscrivez-vous !</h1>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="#">Favoris</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Collections</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </aside>
        </section>
    </main>
    <footer class="container-fluid p-5 m-2">
        <div class="row justify-content-center">
            <ul class="col-4">
                <li>A propos</li>
                <li>Reglement</li>
                <li>Inscription</li>
                <li>Engagement</li>
                <li>La bibliothèque</li>
            </ul>
            <ul class="col-4">
                <li>A propos</li>
                <li>Reglement</li>
                <li>Inscription</li>
                <li>Engagement</li>
                <li>La bibliothèque</li>
            </ul>
            <address class="col-4">
                <h5>Bibliothèque universitaire</h5>
                <p>899 BD des verdoises</br>91350 Juvisy Sur Orge</br>
                    <a href="mailto:info@bu-juvisy.com">info@bu-juvisy.com</a><br>
                    <a href="tel:+330160606060">Tel.01 60 60 60 60</a>
                </p>
            </address>
        </div>

        <div class="text-center bg-black text-white p-3">
            © 2021 Bibliothèque universitaire de Juvisy sur Orge
        </div>
    </footer>
    <script src='app.js'></script>
</body>

</html>