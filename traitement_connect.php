<?php
// récupère le login et mdp du formulaire de connexion 
$pseudo = $_POST['pseudo'];
$pass = $_POST['password'];

// connexion à la base de données
$bdd = new PDO('mysql:host=localhost;port=3306;dbname=miniprjet4;charset=utf8','root'); #,'ChuckNorris44'

// vérifier si le pseudo existe
$requete_pseudo = $bdd->prepare("SELECT COUNT(*) AS ps FROM utilisateurs WHERE pseudo=?");
$requete_pseudo->execute ([$pseudo]);
$resultat_pseudo = $requete_pseudo->fetch(PDO::FETCH_ASSOC);

// récupération du mot de pass hashé
$recup_modepa = $bdd->prepare("SELECT modepa FROM utilisateurs WHERE pseudo = ?");
$recup_modepa->execute ([$pseudo]);
$resultat_recup = $recup_modepa->fetch(PDO::FETCH_ASSOC);

// verif des identifiants rentrés
if ($resultat_pseudo['ps'] == "1"){
    // ligne de commande permettant de verifier si le mot de pass entré dans le form de connexion correspond au mot de passe hashé
    if (password_verify($pass, $resultat_recup['modepa'])) {

        // permet de récupérer l'id de l'utilisateur connecté
        $recup_id = $bdd->prepare("SELECT id_util FROM utilisateurs WHERE pseudo = ?");
        $recup_id->execute ([$pseudo]);
        $resultat_id = $recup_id->fetch(PDO::FETCH_ASSOC);

        // permet de partager des données entre plusieurs pages sans les exposer
        session_start(); 
        $_SESSION['Util'] = $resultat_id['id_util'];
        
        header('Location: carteetbalise.php');
        exit;
    } else {
        header('Location: connexion.php?erreur=1');
        exit;
    }
}else{
    header('Location: connexion.php?erreur=1');
    exit;
}
?>
