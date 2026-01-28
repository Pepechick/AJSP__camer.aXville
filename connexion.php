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
        <?php // button et form permttant de rediriger l'utilisateur vers l'accueil.php?>
        <form action="accueil.php" method="post">
            <button class="btn-accueil">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="white">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                </svg>
            </button>
        </form>
        <?php // container est le div principal invisble qui contient tout?>
        <div class="container">
            <?php // box est le div que l'on voit au centre de la page?>
            <div class="box">
                <?php // box_gauche est le div de gauche qui contient le logo du site?>
                <div class="box-gauche">
                    <img src="IMG/logo-site.png" width="600" height="600" alt="Logo Naocam" class="item-box-gauche">
                </div>
                <?php // box_droite est le div de droite qui contient le formulaire de connexion et plusieurs boutons?>
                <div class="box-droite">
                    <?php // box_connect est le div qui contient le formulaire de connexion?>
                    <div class="box-connect">
                        <h2>Connexion</h2>
                        <form id="formConnection" method="post" action="traitement_connect.php">
                            <div class="zone-form">
                                <label for="pseudo">Pseudo</label>
                                <input type="text" id="pseudo" placeholder="Entrez votre pseudo" name="pseudo" required>
                                <p id="errorPseudo" style="color:red; font-size:10px;">
                                    <?php // code php permettant de dire à l'utilisateur que ses identifiants sont mauvais 
                                    // après être passé par le fichier traitement_connexion.php?>
                                    <?php 
                                        if ($erreur) {
                                            echo "Identifiants incorrects";
                                        }
                                    ?>
                                </p>
                            </div>
                            <div class="zone-form">
                                <label for="password">Mot de passe</label>
                                <input type="password" id="password" placeholder="Entrez votre mot de passe" name="password" required>
                            </div>
                            <?php // button connexion et supprimer/vider le formulaire?>
                            <button class="button-connect" type="reset">Vider le formulaire</button>
                            <button class="button-connect" type="submit">Se connecter</button>
                        </form>
                    </div>
                    <?php // box_inscrip contient le formulaire permttant de partir vers la page inscription?>
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
