<header class="container-fluid m-0 p-0">
    <div class="row ">
        <div class="col-10">
            <img src="assets/images/logov2.png">
        </div>
        <div class="col-2">
            <a href="pages/connexion.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Connexion lecteur</a>
        </div>
    </div>
    <h1>Vous êtes sur la page <?php echo $vue; ?></h1>
    <?php
    if (isset($_SESSION['user'])) {
        echo '<h3>Bonjour ' . $_SESSION['user'] . '</h3>';
    }
    session_write_close();
    ?>
    <nav class="bg-danger p-2">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="../index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/Controller/controller_user.php?entite=personne&action=users">USER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/View/home/infos_pratique.php?entite=personne&action=infos-pratique">Infos pratique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/View/home/ouvrages.php?entite=personne&action=ouvrages">Ouvrages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/View/home/editeurs.php?entite=personne&action=editeurs">Editeurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="auteurs.php?entite=personne&action=auteurs">Auteurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/View/home/contact.php?entite=personne&action=contact">Contact</a>
            </li>
            <li>
                <a href="index.php?entite=personne&action=connexion">Se connecter</a>
            </li>
            <li>
                <a href="index.php?entite=article&action=liste">Voir les articles</a>
            </li>
            <li>
                <a href="index.php?entite=article&action=nouvelArticle">Nouvel article</a>
            </li>
            </section>
        </ul>
    </nav>
</header>