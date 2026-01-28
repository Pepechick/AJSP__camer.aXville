<?php
header('Content-Type: application/json');

$pdo = new PDO("mysql:host=localhost;dbname=miniprjet4;charset=utf8", "root",'ChuckNorris44',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$coo = "SELECT id_cam, latitude, longitude, ville, rue, utilisateurs_id FROM cameras";
$stmt = $pdo->query($coo);

echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>
