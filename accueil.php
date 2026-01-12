<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Connexion NaoCam</title>
        <link rel="stylesheet" href="CSS/accueil.css">
     </head>
     <body>
        <div class="container">
            <div class="box">
                <div class="box-gauche">
                    <img src="IMG/logo-site.png" width="600" height="600" alt="Logo Naocam" class="item-box-gauche">
                </div>
                <div class="box-centre"> 
                    <h1 class="div-item">BIENVENUE SUR NAOCAM</h1>
                    <p class="div-item">Saviez-vous qu'il existe des caméras placés un peu partout dans nos villes,
                        qui enregistrent notre environnement ? Ces dispositifs permettent de surveiller, sécuriser et 
                        analyser les espaces publics. Sur ce site, nous vous proposons de découvrir toutes les caméras
                        de la ville de Nantes et ses alentours. Et même de participer à placer les caméras qui ne sont 
                        pas encore référencées sur le site.</p>
                    <div class="box-connect">
                        <form action="connexion.php" method="post">
                            <button class="button-connect" type="submit">Se connecter</button>
                        </form>
                    </div>
                    <div class="box-inscrip">
                        <form action="inscription.php" method="post">
                            <button class="button-inscrip" type="submit">S'inscrire</button>
                        </form>
                    </div>
                </div>
                <div class="box-droite"> 
                </div>
            </div>
        </div>
    </body>
</html>
