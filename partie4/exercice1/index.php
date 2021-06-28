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
<p>Exercice 1</p>
<!-- Créez un tableau contenant les 12 mois de l'année, affichez "Mars".-->

      <?php
        $calendrier = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
        //in_array fonction qui permet de chercher dans le tableau
        if (in_array('Mars', $calendrier)){
            echo 'Trouvé';
        } else {
            echo 'Pas trouvé';
        }
      ?>

</body>
</html>