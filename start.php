<?php

class Club {
    private $id;
    private $nom;
    private $description;
    private $adresse;
    private $domaine;

    public function info($id, $nom, $description, $adresse, $domaine) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->adresse = $adresse;
        $this->domaine = $domaine;
    }

    public function afficherClub() {
        echo "<h2>Informations sur le Club</h2>";
        echo "<p>ID : " . $this->id . "</p>";
        echo "<p>Nom : " . $this->nom . "</p>";
        echo "<p>Description : " . $this->description . "</p>";
        echo "<p>Adresse : " . $this->adresse . "</p>";
        echo "<p>Domaine : " . $this->domaine . "</p>";
    }
}


$club = new Club(1, "Club Robotique", "Test", "Esprit Ghazala", "Electromecanique");


$club->afficherClub();
?>
