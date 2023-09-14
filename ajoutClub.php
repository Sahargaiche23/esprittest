<?php
require_once 'start.php'; 
require_once 'config.php'; 


$id = isset($_POST["id"]) ? $_POST["id"] : "";
$nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
$description = isset($_POST["description"]) ? $_POST["description"] : "";
$adresse = isset($_POST["adresse"]) ? $_POST["adresse"] : "";
$domaine = isset($_POST["domaine"]) ? $_POST["domaine"] : "";

$club1 = new Club($id, $nom, $description, $adresse, $domaine);


$club1->afficherClub();
?>
