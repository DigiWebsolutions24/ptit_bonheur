<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les P'tit Bonheur</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php 
    include ("./env/connect.php");
    include ("./env/connexion.php");

    ?>
    <section class="page_connexion">

        <h1>Page de connexion</h1>
        <div class="container_connexion">
        <form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title"><a href="https://waytolearnx.com/">MAM Les P'tit Bonheur</a></h1>
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="NOM" placeholder="Nom d'utilisateur">
<input type="submit" value="Connexion " name="submit" class="box-button">
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
        </div>
    </section>

</body>

</html>