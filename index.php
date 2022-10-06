<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les P'tit Bonheur</title>
    <link rel="stylesheet" href="./env/style.css">
    <?php 
    require ("./env/connect.php");
    require ("./env/functions.php");

    ?>
</head>

<body>

    <section class="page_connexion">

        <h1>Page de connexion</h1>
        <div class="container_connexion" method="POST">
            <form action="connexion.php">
                <label for="login">Identifiant de l'enfant</label><br/>  
                <input type="text" name="login" value=""><br/>
                <input type="password" name="pwd" value=""><br/>
                <input type="submit" name="connexion" value="Conexion"><br/>
            </form>
        </div>
    </section>

</body>

</html>