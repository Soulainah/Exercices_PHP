<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercies PHP</title>
</head>
<body>
    <!-- Créez un formulaire avec les champs "civilité", "nom" et "prénom" ainsi qu'un bouton permettant de sélectionner un fichier à envoyer. À l'envoie du formulaire sur la même page, affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'affichage de balises html. -->
<h1>Exercies PHP</h1>
<h2>Partie 6</h2>
    <p>Exercice 5</p>
         <form action="index.php" method="post"> <!-- POST : Recuperer les valeur du input -->
            <select name="civilite">
                <option value="Mme">Mme</option>
                <option value="M">M</option>
                <option value=" ">Autre</option>
            </select>
            <p>Votre nom : <input type="text" name="nom" /></p>
            <p>Votre prénom : <input type="text" name="prenom" /></p>
            <input name="userfile" type="file" />
            <p><input type="submit" value="OK"></p>
        </form>
<!--============================ PHP ============================-->
<?php 
// if(isset($_POST['civilité']) && isset($_POST['nom']) && isset($_POST['prenom'])){
    // $lastname = $_POST['nom'];
    // $name = $_POST['prenom'];
    // $civility = $_POST['civilite'];
    //recuperer le fichier 'name' recuperer le nom du fichier
    // $fichier = $_FILES['userfile'];  
    // $fichierName = $fichier['name'];
    $rejex = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['civilite']) && !empty($_FILES['userfile']['name'])){
        if (preg_match($rejex , $_POST['nom']) && preg_match($rejex , $_POST['prenom'])){
            echo 'Vous etes : ' . $_POST['civilite'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' ' . $_FILES['userfile']['name'];
        } else {
            echo 'Veuillez verifier votre saisie !';
        }
    }  else {
        echo 'Veuillez remplir les informations !';
    }
// }
?>

<!-- 
    !empty : si il est pas vide 
    empty : si il est vide 
    preg_match($rejex , $name) = correspond a la regex
    regex ^ exterieur du [] veut dire commencer; ^ interieur veut dire interdit !
-->
</body>
</html>
