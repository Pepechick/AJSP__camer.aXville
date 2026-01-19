<?php
    // récupère le login et mdp du formulaire en post et les stocke dans des variables php 
	$pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $pass = $_POST['password'];


try {
    // Création de l'objet PDO
    // l'hôte de la base, l'utilisateur et le mot de passe
    $bdd = new PDO('mysql:host=localhost;port=3306;dbname=MP4-Camera;charset=utf8', 'root', 'ChuckNorris44');
    
    
    $requeteCnx = $bdd->prepare("SELECT COUNT(*) AS cnx FROM Utilisateurs WHERE login=? AND mdp=?");
    $requeteCnx->execute ([$login, $mdp]);
    $connexion = $requeteCnx->fetch(PDO::FETCH_ASSOC);

    if ($connexion['cnx'] == "1"){
        echo "Bonjour ".$login."<br>";

        // récupération de l'id_util de la personne connecté
        $requete = $bdd->prepare("SELECT id_util FROM Utilisateurs WHERE login=? AND mdp=?");
        $requete->execute([$login, $mdp]);
        $utilisateur_connecte = $requete->fetch(PDO::FETCH_ASSOC);
        $id = $utilisateur_connecte['id_util'];
        header('Location: carteetbalise.php?id='.$id);
        // envoie vers la page carteetbalise.php


    }else{
    }

  
} catch (PDOException $e) {
   print "Erreur !: ".$e->getMessage()."<br/>";
}
?>
