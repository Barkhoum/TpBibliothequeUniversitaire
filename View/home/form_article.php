<section>
    <div id='form_seach' class="col-6 container-fluid m-5 bg_form">
        <h2>Ajouter un ouvrage </h2>
        <form method="post" enctype="multipart/form-data" action="index.php?entite=article&action=insertArticle">

            <div class="mb-3 col-10">
                <div class="mb-3 col">
                    <label for="titre_livre" class="form-label "></label>
                    <input type="text" class="form-control" name="titre_livre" id="titre_livre" placeholder="Titre du livre">
                </div>
                <div class="mb-3 col">
                    <label for="auteu" class="form-label"></label>
                    <input type="text" class="form-control" name="auteur" id="auteur" placeholder="ajouter un auteur">
                </div>
                <div class="mb-3 col">
                    <label for="editeur" class="form-label"></label>
                    <input type="text" class="form-control" name="editeur" id="genre" placeholder="Ajouter un editeur">
                </div>
                <div class="mb-3 col">
                    <label for="collection" class="form-label"></label>
                    <input type="text" class="form-control" name="collection" id="collection" placeholder="Ajouter une collection">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ajouter un extrait du livre" rows="3"></textarea>
                </div>
                <select class="form-control">
                    <option>genre 101</option>
                    <option>genre 102</option>
                    <option>genre 103</option>
                    <option>genre 104</option>
                    <option>genre 105</option>
                    <option>genre 106</option>
                </select>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Ajouter la photo du livre</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div>
                    <label for="start">Ajouter un date de parution : </label>
                    <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                </div>
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </div>
        </form>
    </div>
</section>