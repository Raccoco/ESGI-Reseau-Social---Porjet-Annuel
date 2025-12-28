<?php

include 'database.php'; 

if(isset($_POST['seco']))
{
extract($_POST);

  if(!empty($pseumail) && !empty($mdp))
  {
    function isEmail($str) {
      return filter_var($str, FILTER_VALIDATE_EMAIL) !== false;
    }

      if(isEmail($pseumail)) {
        $q = "SELECT * FROM utilisateur WHERE email = :pseumail LIMIT 1";
        $type = "email";
      } else {
        $q = "SELECT * FROM utilisateur WHERE pseudo = :pseumail LIMIT 1";
        $type = "pseudo";
      }

      try {
      $stmt = $db->prepare($q);
      $stmt->bindParam(':pseumail', $pseumail, PDO::PARAM_STR);
      $stmt->execute();

      $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($mdp, $user['password'])) {
          $_SESSION['user_id'] = $user['id'];
          $_SESSION['username'] = $user['pseudo'];
          // echo "bon";
          header('Location: home.php');
          exit(); 
        } else {
          $_SESSION['error'] = "Identifiants incorrects.";
          // echo "pas bon";
          header('Location: index.php');
          exit();
        }

      } catch (PDOException $e) {
      die("Erreur lors de la connexion : " . $e->getMessage()); }

  } else {
    echo "Champ(s) de texte vide(s).";
  }
  
}
  ?>