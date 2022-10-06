<?php
include('./env/connect.php');
session_start();
if (isset($_POST['NOM'])){
  $username = stripslashes($_REQUEST['NOM']);
  $username = mysqli_real_escape_string($conn, $username);
    $query = "SELECT * FROM `users` WHERE NOM='$username'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['NOM'] = $username;
      header("Location: index.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>