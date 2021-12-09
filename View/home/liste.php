<section>
    <h3>Liste des livres </h3>
    <br>
    <table>
        <tr>
            <th>id_livre</th> 
            <th>titre_livre</th>
            <th>genre</th>
            <th>date_parution</th>
            <th>editeur</th>
            <th>genre</th>
            <th>collection</th>
            <th>photo_livre</th>
            
        </tr>
        <?php

        foreach ($articles as $article) {
            //var_dump($article);
            echo '<tr>';
            echo '<td>' . $article['id_livre'] . '</td>';
            echo '<td>' . $article['titre_livre'] . '</td>';
            echo '<td>' . $article['genre'] . '</td>';
            echo '<td>' . $article['date_parution'] . '</td>';
            echo '<td>' . $article['editeur'] . '</td>';
            echo '<td>' . $article['collection'] . '</td>';
            echo '<td>' . $article['photo_livre'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>

</section>