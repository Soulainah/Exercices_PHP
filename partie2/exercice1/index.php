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
<p>Exercice 1</p>
<!-- Créez une boucle qui affiche les nombres de 0 à 10. -->
<?php
    $number = 0;
    while($number <= 10){
        ?>
        <p><?= $number ?></p>
        <?php $number++;
    }
?>
</body>
</html>