<?php

include "database.php";  
if(isset($_POST['valider'])){
  $prenom = $_POST['prenom'];     
  $nom = $_POST['nom'];  
  $pseudo = $_POST['pseudo']; 
  $adresseemail = $_POST['adresseemail'];
  $motdepasse = $_POST['motdepasse'];
  $promo = $_POST['promo'];  

 $hashpass = password_hash($motdepasse, PASSWORD_BCRYPT, ['cost' => 12]);
try {
  $q = $db->prepare("INSERT INTO utilisateur(prenom,nom,pseudo,email,password,promo) VALUES(?, ?, ?, ?, ?, ?)");
  $q->execute([$prenom,$nom,$pseudo,$adresseemail,$hashpass,$promo]);
    echo "le compte a été créé";
    header('Location: index.php');
    exit();
  } catch(PDOException $e) {
    echo "error" . $e->getMessage();
  }
    
  global $db;
    
}
  ?>