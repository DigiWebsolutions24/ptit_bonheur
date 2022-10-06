<section>
        <div>
            <table>
                <tr>
                    <td>Nom de l'enfant</td>
                    <td>Début du Contrat</td>
                    <td>Heure semaines</td>
                    <td>Rémunération</td>
                    <td>Heures majorée</td>
                    <td>Frais d'entretien</td>
                </tr>
                <tr>
                <?php
                    foreach ($db->query('SELECT * FROM enfants') as $row) {
                    echo '<tr> 
                    <td>' .$row['NOM'] . '</td>
                    <td>' .$row['DATE'] . '</td>
                    <td>' .$nbd . '</td>
                    <td>' .$row['REMU'] . '</td>
                    <td>' .$row['HEURESMAJ'] . '</td>
                    <td>' .$row['FRAIS'] . '</td>
                    </tr>';
                    }

                ?>
            </table>
        </div>
    </section>