<?php
// récupérer depuis le formulaire d'inscription
$commune = $_POST['Commune'];
$rue = $_POST['Rue'];
$lon = $_POST['Longitude'];
$lat = $_POST['Latitude'];

// seuil de proximité en degrés 
$seuil = 0.0001;

// connexion à la base de données
$bdd = new PDO('mysql:host=localhost;port=3306;dbname=miniprjet4;charset=utf8','root'); #,'ChuckNorris44'

// vérifier si une caméra est trop proche 
$requete = $bdd->prepare(" SELECT COUNT(*) AS nb FROM cameras 
                           WHERE ABS(longitude - ?) < ? 
                           AND ABS(latitude - ?) < ? "); 
$requete->execute([$lon, $seuil, $lat, $seuil]); 
$resultat = $requete->fetch(PDO::FETCH_ASSOC);

if ($resultat['nb'] == 0) { 
    $insert = $bdd->prepare("INSERT INTO cameras (longitude, latitude) VALUES (?, ?)"); 
    $insert->execute([$lon, $lat]);

} else {
}
?>