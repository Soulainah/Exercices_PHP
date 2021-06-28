<?php 
    $lastname = $_POST['nom'];
    $name = $_POST['prenom'];
    if (!empty($lastname) && !empty($name)){
       echo 'Votre nom est : ' . $lastname . ' et votre prénom est : ' . $name; 
    } else {
        echo 'Veuillez indiquer les informations demandées !';
    }
?>

<!-- 
    !empty : si il est pas vide 
    empty : si il est vide 
-->