<?php
// Récupérer le pseudo depuis le formulaire
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;port=3306;dbname=MP4-Camera;charset=utf8','root','ChuckNorris44');

// Vérifier si le pseudo existe déjà
$requete = $bdd->prepare("SELECT COUNT(*) AS nb FROM utilisateurs WHERE pseudo=?");
$requete->execute([$pseudo]);
$resultat = $requete->fetch(PDO::FETCH_ASSOC);

if ($resultat['nb'] > 0) {
    header('Location: inscription.php?erreur=pseudo&pseudo='.$pseudo.'&email='.$email);
    exit;
} else {
    // Hash du mot de passe pour plus de sécurité
    $passHash = password_hash($pass, PASSWORD_DEFAULT);

    $stmt = $bdd->prepare("INSERT INTO utilisateurs (pseudo, modepa, email, admin, contribution) VALUES (?, ?, ?, non, 0)");
    $stmt->execute([$pseudo, $passHash, $email]);

    header('Location: carteetbalise.php');
    exit;
}
?>