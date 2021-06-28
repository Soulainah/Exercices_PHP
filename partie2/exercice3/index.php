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
<p>Exercice 3</p>
<!-- Créez une variable initialisé à 1. Tant que cette variable n'a pas atteint 15, affichez 'On y est presque'. -->
<?php
   echo "<br><br>";
   for($gray=1; $gray <= 15; $gray++){
       if($gray !=15){
           echo "On y est presque ! ";
       }else{
           echo "On à atteint ";
       }
       echo $gray. "<br>";
   }
?>
</body>
</html>