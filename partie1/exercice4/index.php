<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <h3>Exercice 4: Créez une variable age aléatoire. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge obtenu.</h3>
    <?php
    function displayMajorOrMinor($age){
        //var_dump retourne les informations structurées d'une variable, y compris son type et sa valeur
        // var_dump($age);
        if($age < 0 || $age >130){
            echo "Veuillez entrer un age valide";
            return;
        }
        if ($age >= 18) {
           echo "Vous êtes majeur";
        }
        else{
            echo "Vous êtes encore mineur :) ";
        }
    };
    $randomAge = random_int(1, 160);
    var_dump($randomAge);
    echo "<br>";
    displayMajorOrMinor($randomAge)
    ?>
</body>
</html>