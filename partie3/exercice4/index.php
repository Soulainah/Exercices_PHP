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
<p>Exercice 4</p>
<!-- Créez une fonction qui retourne deux nombres aléatoire allant de 1 à 15. Si le premier nombre est plus grand que le deuxième affichez "le premier nombre est plus grand que le deuxième" sinon si le deuxième nombre est plus grand affichez "le premier nombre est plus petit que le deuxième". affichez "les deux nombres sont égaux" si les deux nombres sont identiques.-->
<?php
  $randOne = rand(1 , 15);
  $randTwo = rand(1 , 15);

  function number ($a , $b){
      if ($a > $b){
          echo $a . ' est plus grand que ' .  $b;
      } else if ($a < $b){
          echo $a . ' est plus petit que ' . $b;
      }else {
          echo $a . ' sont egaux ' . $b;
      }
  }
  number ($randOne , $randTwo);
?>
</body>
</html>