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
<h2>Partie 3</h2>
<p>Exercice 3</p>
<!-- Créez deux variables contenant chacune une string. Créez une fonction qui retourne le contenu de ces deux variable.-->
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