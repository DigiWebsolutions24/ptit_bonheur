<?php

 
//On connecte la base de données
$user = 'digimyshjhweb';
$pass = 'Digi24Websolutions150';
$conn = new PDO('mysql:host=digimyshjhweb.mysql.db;dbname=digimyshjhweb', $user, $pass);

// V�rifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>