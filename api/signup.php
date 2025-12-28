<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
    <div class="form-container">
    <h2>INSCRIPTION</h2>
    <form method="post">
      <label>Votre Prénom:</label>
      <input type="text" name="prenom" id="prenom" required>
<br>
      <label>Votre Nom:</label>
      <input type="text" name="nom" id="nom" required>
<br>
      <label>Votre Pseudo:</label>
      <input type="text" name="pseudo" id="pseudo" required>
<br>
      <label>Votre adresse email</label>
      <input type="email" name="adresseemail" id="adresseemail" required>
<br>
      <label>Votre mot de passe</label>
      <input type="password" name="motdepasse" id="motdepasse" required>
<br>
      <label>Confirmez votre mot de passe</label>
      <input type="password" id="confirmermdp" name="confirmermdp" required>
<br>
      <label>A quelle promo appartenez vous?</label>
      <br>
      <br>
      <select name="promo" id="promo" required>
        <option value="bach1" id="bach1">B1</option>
        <option value="bach2" id="bach2">B2</option>
        <option value="bach3" id="bach3">B3</option>
        <option value="mas1" id="mas1">M1</option>
        <option value="mas2" id="mas2">M2</option>
        <option value="alum" id="alum">Alumni</option>
      </select>
      <br>
      <br>
      <input type="submit" name="valider" id="valider" value="Valider">
    </form>
  
    <?php 
    if(isset($_POST['valider'])){
      if(($_POST['motdepasse']) != ($_POST['confirmermdp'])){
      echo "Les mots de passe ne correspondent pas! <br>";
    } else {
    include 'include/datainsert.php';
    } }
    ?>
    
        <br>    
    <a href="index.php">Vous possédez un compte ? Connectez-vous</a>
  </div>


</body>
</html>
