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
<p>Exercice 5</p>
<!-- initialisez une variable à 200. Tant que cette variable est supérieure à 0, décrémentez avec un pas de 12. -->
<?php
$number = 200;
while($number >= 0){
    $number -= 12;
       ?>
       <!-- < ? = varibale ? > veut dire echo -->
        <p><?= $number ?></p>
        <?php
    }
?>
</body>
</html>