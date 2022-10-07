<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"]) && !isset($_SESSION["role"])){
		header("Location: login.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="sucess">
		<h1>
			Bienvenue <?php echo $_SESSION['username'];	?>!
		</h1>
		<p>Bienvenue sur votre tableau de bord <?php 
		var_dump(isset($_SESSION['role'])); 
		echo $_SESSION['role'];?></p>
		<a href="logout.php">Déconnexion</a>
		</div>
	</body>
</html>