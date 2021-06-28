<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercies PHP</title>
</head>
<body>
    <!-- Créez un formulaire avec les champs "civilité", "nom" et "prénom". À l'envoie du formulaire sur une autre page, Affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'inclusion de balises html. -->
<h1>Exercies PHP</h1>
<h2>Partie 6</h2>
    <p>Exercice 3</p>
         <form action="user.php" method="post"> <!-- POST : Recuperer les valeur du input -->
            <select name="civilite">
                <option value="Mme">Mme</option>
                <option value="M">M</option>
                <option value=" ">Autre</option>
            </select>
            <p>Votre nom : <input type="text" name="nom" /></p>
            <p>Votre prénom : <input type="text" name="prenom" /></p>
            <p><input type="submit" value="OK"></p>
        </form>
</body>
</html>
