<?php
    // récupère le login et mdp du formulaire en post et les stocke dans des variables php 
	$login = $_GET['login'];
	$mdp = $_GET['mdp'];



try {
    // Création de l'objet PDO
    // on instancie la classe PDO. La documentation nous renseigne sur les 3 arguments à passer au constructeur
    // l'hôte de la base, l'utilisateur et le mot de passe
    $bdd = new PDO('mysql:host=localhost;port=3306;dbname=notations;charset=utf8', 'root', 'ChuckNorris44');
    #echo "ton mot de passe est ".$mdp."<br>";
    
    $requeteCnx = $bdd->prepare("SELECT COUNT(*) AS cnx FROM Utilisateurs WHERE login=? AND mdp=?");
    $requeteCnx->execute ([$login, $mdp]);
    $connexion = $requeteCnx->fetch(PDO::FETCH_ASSOC);

    if ($connexion['cnx'] == "1"){
        echo "Bonjour ".$login."<br>";

        // récupération de l'id_utilisateur de la personne connecté
        $requete = $bdd->prepare("SELECT id_util FROM Utilisateurs WHERE login=? AND mdp=?");
        $requete->execute([$login, $mdp]);
        $utilisateur_connecte = $requete->fetch(PDO::FETCH_ASSOC);
        $id = $utilisateur_connecte['id_utilisateur'];
        header('Location: note.php?id='.$id);
        // envoie vers la page note.php


    }else{
        echo "<h1>Hummm... Erreur de connexion!</h1>";
        echo "<a href='index.html'>retour page acceuil...</a>";
    }

  
} catch (PDOException $e) {
   print "Erreur !: ".$e->getMessage()."<br/>";
}
?>
