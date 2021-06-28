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
<h2>Partie 4</h2>
<p>Exercice 5</p>
<!-- Créez un tableau associatif contenant comme clé des numéro de département et comme valeurs les départements correspondants. Affichez les départements et leurs clés respectives.-->
<?php
        $departement = array( 75 => 'Paris', 93 => 'Seine-saint-denis', 95 => 'Val d\'oise', 94 => 'Val de Marne', 92 => 'Haut-de-Seine');
        foreach($departement as $key => $valeur){
            echo $key. ' =>'. $valeur. '<br>';
        }
        
      ?>
</body>
</html>