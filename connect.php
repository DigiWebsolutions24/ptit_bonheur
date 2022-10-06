<?php 

//On connecte la base de données
$host = "digimyshjhweb.mysql.db";
$dbname = "digimyshjhweb";
$user = "digimyshjhweb";
$pass = "Digi24Websolutions150";
$db = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass, $pdo_option);
$pdo_option->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$liste_enfants = $db->query('SELECT * FROM enfants');
                
echo $db;
