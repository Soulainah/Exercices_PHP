<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercies PHP</title>
</head>
<body>
<h1>Exercies PHP</h1>
<h2>Partie 5</h2>
<p>Exercice 1</p>
<a href="index.php?nom=Fritas&amp;prenom=Souh">Helloooo</a>
<!-- Créez un lien avec les paramètres "nom" et "prénom" dirigeant sur la page courante et affichez ces paramètres. -->
<?php
    echo ' Nom : '. $_GET['nom'] .' '. 'Prénom : '. $_GET['prenom'];   
?>
</body>
</html>