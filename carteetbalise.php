<?php
// permet de recuperer les éléments de la page traitement_connect.php qui ouvre aussi une session
session_start(); 
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Carte</title>
        <!-- LEAFLET --> 
        <!-- Leaflet css -->	
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>
        <!-- Leaflet Libraries  - Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
        <!-- JS et CSS -->          
        <link rel="stylesheet" href="CSS/carteetbalise.css">
        <script src="JS/carteetbalise.js" defer></script>
     </head>
     <body>
        <form action="traitement_deconnect.php" method="post">
            <button class="btn-deco" id="btn-deco" name="btn-deco"> 
                <span class="icon"> 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="white"> 
                        <path d="M16 13v-2H7V8l-5 4 5 4v-3h9zm3-10H8a2 2 0 0 0-2 2v4h2V5h11v14H8v-4H6v4a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"/> 
                    </svg> 
                </span> 
                <span class="label">Déconnexion</span> 
            </button>
        </form>
        <button <?php 
                    if (isset($_SESSION['util'])) {echo 'class="btn-camera"';}
                    else {echo 'class="hidden"';}?> id="btn-camera"> 
            <span class="icon"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="white"> 
                    <path d="M17 10.5V7a2 2 0 0 0-2-2H5A2 2 0 0 0 3 7v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-3.5l4 4v-11l-4 4z"/> 
                </svg> 
            </span> 
            <span class="label">+ Camera</span> 
        </button>
        <div class="box_new-camera" id="box_new-camera">
            <form id="formCamera" method="post" action="traitement_camera.php">
                <div class="zone-form">
                    <label for="Latitude">Latitude</label>
                    <input type="text" id="Latitude" placeholder="Entrez la Latitude" name="Latitude" required>
                </div>
                <div class="zone-form">
                    <label for="Longitude">Longitude</label>
                    <input type="text" id="Longitude" placeholder="Entrez la Longitude" name="Longitude" required>
                </div>
                <div class="zone-form">
                    <label for="Commune">Commune</label>
                    <input type="text" id="Commune" placeholder="Entrez la Commune" name="Commune" required>
                </div>
                <div class="zone-form">
                    <label for="Rue">Rue</label>
                    <input type="text" id="Rue" placeholder="Entrez la Rue" name="Rue" required>
                </div>
                <button class="button-form" type="reset">Vider le formulaire</button>
                <button class="button-form" type="submit">Ajouter la camera</button>
            </form>
        </div>
        <div class="container">
            <div id="map">
            </div>
        </div>
    </body>
</html>
