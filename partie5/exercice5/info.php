<?php
   if (isset($_GET['serveur']) && isset($_GET['langage'])) {
       echo $_GET['serveur']. ' ' .$_GET['langage'];
   } else {
       echo 'Erreuuur !!!';
   }
?>

<!-- isset pour verifier -->