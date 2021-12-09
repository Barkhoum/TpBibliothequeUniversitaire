<section>
    <h3>Identifiez vous</h3>
    <form method="post" action="index.php?entite=Livre&action=InsertLivre">
        <?php
        if ($erreur != '') {
            echo '<h5>' . $erreur . '</h5>';
        }
        ?>
        <label>Nom du Livre </label>
        <input type="text" name="livre">
        <br>
        <label>Photo du Livre </label>
        <input type="file" name="photo">
        <br>





        <button type="submit">Valider</button>
    </form>
</section>