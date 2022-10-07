<?php
session_start();

include('config.php');
if (isset($_REQUEST['username'], $_REQUEST['password'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    // récuperer le role de l'utilisateur
    $role = stripslashes($_REQUEST['role']);
    $role = mysqli_real_escape_string($conn, $role);
	//requéte SQL + mot de passe crypté
    $queryEnfant = "INSERT into `enfants` (username, role, password)
              VALUES ('$username', '$role', '".hash('sha256', $password)."')";
	// Exécute la requête sur la base de données
    $res = mysqli_query($conn, $queryEnfant);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			 </div>";
    }
}else{
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>

<form class="box" action="" method="post">
    <h1 class="box-title">Inscription d'un enfant</h1>
	<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <select name="role" id="role">
    <option value="admin">Administrateur</option>
    <option value="users">Enfant</option>
    </select>
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>