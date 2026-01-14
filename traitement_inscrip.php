<?php
// Récupérer le pseudo depuis le formulaire
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=miniprjet4;charset=utf8','root','');

// Vérifier si le pseudo existe déjà
$requete = $bdd->prepare("SELECT COUNT(*) AS nb FROM utilisateurs WHERE pseudo=?");
$requete->execute([$pseudo]);
$resultat = $requete->fetch(PDO::FETCH_ASSOC);

if ($resultat['nb'] > 0) {
    header('Location: inscription.php?erreur=pseudo'.'&pseudo='.urlencode($pseudo).'&email='.urlencode($email));
    exit;
} else {
    // Hash du mot de passe pour plus de sécurité
    $passHash = password_hash($pass, PASSWORD_DEFAULT);

    $stmt = $bdd->prepare("INSERT INTO utilisateurs (pseudo, mot_de_passe, Email, contribution) VALUES (?, ?, ?, 0)");
    $stmt->execute([$pseudo, $passHash, $email]);

    header('Location: carteetbalise.php');
    exit;
}
?>