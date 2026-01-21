<?php
// récupérer depuis le formulaire d'inscription
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$pass = $_POST['password'];

// connexion à la base de données
$bdd = new PDO('mysql:host=localhost;port=3306;dbname=miniprjet4;charset=utf8','root'); #,'ChuckNorris44'

// vérifier si le pseudo existe déjà
$requete = $bdd->prepare("SELECT COUNT(*) AS nb FROM utilisateurs WHERE pseudo=?");
$requete->execute([$pseudo]);
$resultat = $requete->fetch(PDO::FETCH_ASSOC);

// verif du pseudo et du mot de passe
if ($resultat['nb'] > 0) {
    header('Location: inscription.php?erreur=pseudo&pseudo='.$pseudo.'&email='.$email);
    exit;
} else {
    // hashage du mot de passe pour la sécurité
    $passHash = password_hash($pass, PASSWORD_DEFAULT);

    // on insert les éléments dans la table utilisateurs
    $stmt = $bdd->prepare("INSERT INTO utilisateurs (pseudo, modepa, email, admins, contribution) VALUES (?, ?, ?, 'non', 0)");
    $stmt->execute([$pseudo, $passHash, $email]);

    header('Location: carteetbalise.php');
    exit;
}
?>