<?php
// récupère le login et mdp du formulaire en post et les stocke dans des variables php 
$pseudo = $_POST['pseudo'];
$pass = $_POST['password'];

// Création de l'objet PDO
// l'hôte de la base, l'utilisateur et le mot de passe
$bdd = new PDO('mysql:host=localhost;port=3306;dbname=MP4-Camera;charset=utf8','root','ChuckNorris44');

$requete = $bdd->prepare("SELECT COUNT(*) AS nb FROM utilisateurs WHERE pseudo=? AND modepa=?");
$requete->execute ([$login, $mdp]);
$resultat = $requete->fetch(PDO::FETCH_ASSOC);

if ($resultat['nb'] !== "1"){
    header('Location: connexion.php?erreur=pseudo&pseudooumotdepasse='.$pseudo);
    exit;

    // récupération de l'id_util de la personne connecté
    $requete = $bdd->prepare("SELECT id_util FROM utilisateurs WHERE login=? AND mdp=?");
    $requete->execute([$login, $mdp]);
    $utilisateur_connecte = $requete->fetch(PDO::FETCH_ASSOC);
    $id = $utilisateur_connecte['id_util'];
    header('Location: carteetbalise.php?id='.$id);
    // envoie vers la page carteetbalise.php


}else{
}
?>
