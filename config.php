<?php
// Informations d'identification
define('DB_SERVER', 'digimyshjhweb.mysql.db');
define('DB_USERNAME', 'digimyshjhweb');
define('DB_PASSWORD', 'Digi24Websolutions150');
define('DB_NAME', 'digimyshjhweb');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>
