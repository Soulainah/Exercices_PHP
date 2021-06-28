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
<h2>Partie 2</h2>
<p>Exercice 4</p>
<!-- Initialisez une variable à 1. Tant que cette variable est inférieure à 100, incrémentez avec un pas de 15. -->
<?php
// ma variable 'number' commence à 1 (initialisation) ; ma variable 'number' tourne (boucle) jusqu'à 100 (condition); ma variable 'number' s'incremente d'un pas de 15 (incrementation)
    for($number = 1; $number <= 100; $number += 15){
       ?>
       <!-- < ? = varibale ? > veut dire echo -->
        <p><?= $number ?></p>
        <?php
    }
?>
</body>
</html>