<?php 
    $lastname = $_POST['nom'];
    $name = $_POST['prenom'];
    $civility = $_POST['civilite'];
    $rejex = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";
    if (!empty($lastname) && !empty($name) && !empty($civility)){
        if (preg_match($rejex , $name) && preg_match($rejex , $lastname)){
            echo 'Vous etes : ' . $civility . ' ' . $lastname . ' ' . $name;
        } else {
            echo 'Veuillez verifier votre saisie !';
        }
    } else {
        echo 'Veuillez indiquer les informations demandées !';
    }
?>

<!-- 
    !empty : si il est pas vide 
    empty : si il est vide 
    preg_match($rejex , $name) = correspond a la regex
    regex ^ exterieur du [] veut dire commencer; ^ interieur veut dire interdit !

-->