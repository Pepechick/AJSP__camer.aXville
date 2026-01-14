<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Insciption NaoCam</title>
        <link rel="stylesheet" href="CSS/inscription.css">
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
                    <div class="box-inscrip">
                        <h2>Inscription</h2>
                        <form id="formInscription" method="get" action="traitement_inscrip.php">
                            <div class="zone-form">
                                <label for="pseudo">Pseudo</label>
                                <input type="text" id="pseudo" placeholder="Entrez votre pseudo" name="pseudo">
                            </div>
                            <div class="zone-form">
                                <label for="email">Adresse email</label>
                                <input type="email" id="email" placeholder="Entrez votre email" name="email">
                            </div>
                            <div class="zone-form">
                                <label for="password">Mot de passe</label>
                                <input type="password" id="password" placeholder="Entrez votre mot de passe" name="password" minlength="8" maxlength="20" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}$" required>
                            </div>
                            <div class="zone-form">
                                <label for="password">Vérifier le mot de passe</label>
                                <input type="password" id="verifpassword" placeholder="Vérifier votre mot de passe" name="verifpassword">
                            </div>
                            <button class="button-inscrip" type="submit">S'inscrire</button>
                            <p id="error" style="color:red"></p>
                        </form>
                    </div>
                    <div class="box-connect">
                        <form action="connexion.php" method="post">
                            <button class="button-connect" type="submit">Se connecter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
