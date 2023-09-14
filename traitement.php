<?php

$nom = isset($_GET["nom"]) ? $_GET["nom"] : "";
$description = isset($_GET["description"]) ? $_GET["description"] : "";
$adresse = isset($_GET["adresse"]) ? $_GET["adresse"] : "";
$domaine = isset($_GET["domaine"]) ? $_GET["domaine"] : "";


if (empty($nom) || empty($description) || empty($adresse) || empty($domaine)) {
    echo "Champs manquants";
} else {
  
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Description</th><th>Adresse</th><th>Domaine</th></tr>";
    echo "<tr><td>$nom</td><td>$description</td><td>$adresse</td><td>$domaine</td></tr>";
    echo "</table>";
}
?>
