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
<p>Exercice 4</p>
<!-- Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langage de programmation. Ajoutez une clé et assignez lui une valeur. Affichez cette valeur.-->
<?php
        $language = array( 1 => 'HTML', 2 => 'CSS', 3 => 'JAVASCRIPT', 4 => 'JQUERY', 5 => 'PHP');
        foreach($language as $key => $valeur){
            echo $key. ' =>'. $valeur. '<br>';
        }
        
      ?>
</body>
</html>