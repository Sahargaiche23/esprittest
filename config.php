<?php
class config {
    private static $instance = NULL;

    public static function getConnexion() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=esprit', 'root', '');
        }
        return self::$instance;
    }
}


    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
    $description = isset($_POST["description"]) ? $_POST["description"] : "";
    $adresse = isset($_POST["adresse"]) ? $_POST["adresse"] : "";
    $domaine = isset($_POST["domaine"]) ? $_POST["domaine"] : "";

    
    $connexion = config::getConnexion();
    $sql = "INSERT INTO club (id, nom, description, adresse, domaine) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connexion->prepare($sql);
    $stmt->execute([$id, $nom, $description, $adresse, $domaine]);

   
    exit;

?>
