<section>
    <h3>Liste des membres</h3>
    <br>
    <table>
        <tr>
            <th>id_users</th>
            <th>nom_user/th>
            <th>prenom_user</th>
            <th>telephone_user</th>
            <th>email_user</th>
            <th>id_status</th>
        </tr>
        <?php

        foreach ($users as $user) {
            //var_dump($user);
            echo '<tr>';
            echo '<td>' . $user['id_users '] . '</td>';
            echo '<td>' . $user['nom_user'] . '</td>';
            echo '<td>' . $user['prenom_user'] . '</td>';
            echo '<td>' . $user['adresse_user'] . '</td>';
            echo '<td>' . $user['telephone_user'] . '</td>';
            echo '<td>' . $user['email_user'] . '</td>';
            echo '<td>' . $user['id_status'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>

</section>