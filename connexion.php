<?php
// Récupérer l'erreur
$erreur = isset($_GET['erreur']);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Connexion NaoCam</title>
        <link rel="stylesheet" href="CSS/connexion.css">
     </head>
     <body>
        <form action="accueil.php" method="post">
            <button class="btn-accueil">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="white">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                </svg>
            </button>
        </form>
        <div class="container">
            <div class="box">
                <div class="box-gauche">
                    <img src="IMG/logo-site.png" width="600" height="600" alt="Logo Naocam" class="item-box-gauche">
                </div>
                <div class="box-droite">
                    <div class="box-connect">
                        <h2>Connexion</h2>
                        <form id="formConnection" method="post" action="traitement_connect.php">
                            <div class="zone-form">
                                <label for="pseudo">Pseudo</label>
                                <input type="text" id="pseudo" placeholder="Entrez votre pseudo" name="pseudo" required>
                                <?php 
                                    if ($erreur) {
                                        echo "Identifiants incorrects";
                                    }
                                ?>
                            </div>
                            <div class="zone-form">
                                <label for="password">Mot de passe</label>
                                <input type="password" id="password" placeholder="Entrez votre mot de passe" name="password" required>
                            </div>
                            <button class="button-connect" type="submit">Se connecter</button>
                        </form>
                    </div>
                    <div class="box-inscrip">
                        <form action="inscription.php" method="post">
                            <button class="button-inscrip" type="submit">S'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
