<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les P'tit Bonheur</title>
    <link rel="stylesheet" href="style.css">
    <?php 
    include ("connect.php");

    ?>
</head>

<body>
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
                    
                    $arrivee = $db->query('SELECT DEPARTPREVU FROM enfants');
                    $depart = $db->query('SELECT ARRIVEEPREVU FROM enfants');

                    $a = new DateTime($depart); 
                    $b = new DateTime($arrivee); 
                    $intervalle = $a->diff($b); 
                    echo $interval->format("%H"); 

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
    <section class="page_connexion">

        <h1>Page de connexion</h1>
        <div class="container_connexion">
            <form action="POST">
                <label for="connexion">Identifiant de l'enfant</label>
                <input type="text">
                <button>Voir mon enfant</button>
            </form>

        </div>
    </section>

</body>

</html>