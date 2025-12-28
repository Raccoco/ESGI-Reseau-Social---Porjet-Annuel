<?php
session_start();
include 'include/dataextract.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style
        body {
            background-color: red;
        }
    </style>
</head>
<body>


<center>
    <h2>ESGI LOGO</h2>
    <br>
    <form method="POST" action="">
        <label>Pseudo ou Mail</label><br>
        <input type="text" name="pseumail" id="pseumail" placeholder="Pseudonyme/Mail">
        <br><br>
        <label>Mot de Passe</label> <br>
        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe"><br>
        <input type="checkbox" id="montrerMDP" name="montrermdp" value="montrer" onclick="FmdpMontre()">
        <label for="montrermdp">Afficher le mot de passe</label>
        <br><br>
        <input type="submit" id="seco" name="seco" value="Se Connecter"><br>
        <script language="javascript">
            function FmdpMontre() {
                var mdp = document.getElementById("mdp");
                    if (mdp.type === "password") {
                    mdp.type = "text";
                        } else {
                    mdp.type = "password"; }
            }
        </script>
    </form>    
    <hr>
    <br>
    <button onclick="window.location.href='signup.php';">S'inscrire</button>   
</center>
</body>
</html>

