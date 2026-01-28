<?php
session_start();

// supprime la session lors de la deconnexion
session_unset();
header('Location: accueil.php');
?>