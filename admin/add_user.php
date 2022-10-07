<?php
require('./config.php');
if (isset($_REQUEST['username'], $_REQUEST['role'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur 
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username); 
  // récupérer le mot de passe 
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  // récupérer le type (user | admin)
  $type = stripslashes($_REQUEST['role']);
  $type = mysqli_real_escape_string($conn, $type);
  
    $query = "INSERT into `users` (username, type, password)
          VALUES ('$username', '$type', '".hash('sha256', $password)."')";
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>L'utilisateur a été créée avec succés.</h3>
             <p>Cliquez <a href='home.php'>ici</a> pour retourner à la page d'accueil</p>
       </div>";
    }
}else{
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./style.css" />
</head>
<body>

<form class="box" action="" method="post">
  <h1 class="box-logo box-title">
   La Mam LES PTIT BONHEUR
  </h1>
    <h1 class="box-title">Ajouter un enfant</h1>
  <input type="text" class="box-input" name="username" 
  placeholder="Nom d'utilisateur" required />
  
  <div>
      <select class="box-input" name="type" id="type" >
        <option value="" disabled selected>Role</option>
        <option value="admin">Admin</option>
        <option value="users">Enfant</option>
      </select>
  </div>
  
    <input type="password" class="box-input" name="password" 
  placeholder="Mot de passe" required />
  
    <input type="submit" name="submit" value="+ Ajouter" class="box-button" />
</form>
<?php } ?>
</body>
</html>