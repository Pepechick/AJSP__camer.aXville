<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Connexion NaoCam</title>
        <link rel="stylesheet" href="CSS/accueil.css">
     </head>
     <body>
        <?php // container est le div principal invisble qui contient tout?>
        <div class="container">
            <?php // box est le div que l'on voit au centre de la page?>
            <div class="box">
                <?php // box_gauche est le div de gauche qui contient le logo du site?>
                <div class="box-gauche">
                    <img src="IMG/logo-site.png" width="600" height="600" alt="Logo Naocam" class="item-box-gauche">
                </div>
                <?php // box_centre est le div de centre qui contient les infos de la page et du site?>
                <div class="box-centre"> 
                    <h1 class="div-item">BIENVENUE SUR NAOCAM</h1>
                    <p class="div-item" style="font-size: 24px; text-align: justify; color: #0c0c0c;">
                        Depuis avril 2018, un dispositif de vidéoprotection est mis en place à Nantes, 
                        tant en centre ville sur des sites fréquentés, qu'au cœur des quartiers nantais, formant un plus 
                        prêt au service de la sécurité des citoyens. La Ville de Nantes dispose de 350 caméras, pilotées 
                        depuis le Centre de supervision urbaine de Nantes Métropole 24h/24 et 7j/7 grâce à 19 opérateurs. 
                        La vidéoprotection est aux patrouilles sur le terrain et permet de renforcer la prévention et la 
                        résolution des des des delinquance, elle a permis d'éviter plus de 1300 situations de délinquance 
                        depuis son installation.</p>
                    <?php // box_connect est le div qui contient le bouton permmettant de partir sur la page connexion.php?>
                    <div class="box-connect">
                        <form action="connexion.php" method="post">
                            <button class="button-connect" type="submit">Se connecter</button>
                        </form>
                    </div>
                    <?php // box_inscrip est le div qui contient le bouton permmettant de partir sur la page inscription.php?>
                    <div class="box-inscrip">
                        <form action="inscription.php" method="post">
                            <button class="button-inscrip" type="submit">S'inscrire</button>
                        </form>
                    </div>
                    <?php // box_vers-carte est le div qui contient le bouton permmettant de partir sur la page carteetbalise.php sous version hors connexion?>
                    <div class="box-vers-carte">
                        <form action="carteetbalise.php" method="post">
                            <button class="button-vers-carte" type="submit">Aller sur la carte</button>
                        </form>
                    </div>
                    <p style="font-family: Arial, sans-serif; font-size: 12px;" >Email : simon.loison2@gmail.com</p>
                    <p style="font-family: Arial, sans-serif; font-size: 12px;" >Qui somme nous ? : Simon Loison, Pierre Haroun, Jordan Nguyen, Armand Foucault</p>
                    <p style="font-family: Arial, sans-serif; font-size: 12px;" >Compte Instagram : pierre_haroun</p>
                    <a href="https://youtu.be/L5papfLl-Jg? si=IHOiceL6lmFXdo7x" style="font-family: Arial, sans-serif; font-size: 12px; color: #0c0c0c;">>>> Vidéo : "La vidéoprotection à Nantes, ça se passe comment ?"</a>
                    <a href="https://youtu.be/MtNQjt-8SI4? si=41n_yiEO1StbP9-j" style="font-family: Arial, sans-serif; font-size: 12px; color: #0c0c0c;">>>> Vidéo : "Vidéoprotection : 80 caméras supplémentaires à Nantes en 2024"</a>
                </div>
                <?php // box_droite est le div de droite qui contient rien, c'est juste pour le style?>
                <div class="box-droite"> 
                </div>
            </div>
        </div>
    </body>
</html>
