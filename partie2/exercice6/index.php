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
<p>Exercice 6</p>
<!-- Créez un tableau contenant les 12 mois de l'année. Afficher ces mois dans un "select". -->
<select>
      <?php
      $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
      $tablength = count($tab);
      for($i = 0; $i < $tablength; $i++){
        ?>
        <option><?= $tab[$i] ?></option>
        <?php
      }
      ?>
    </select>
</body>
</html>