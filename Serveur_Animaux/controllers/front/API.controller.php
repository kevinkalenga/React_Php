<?php

class APIController
{

    public function getAnimaux()
    {
        echo "Envoi des informations sur les animaux";
    }
    public function getAnimal($idAnimal)
    {
        echo  "données JSON de l'animal " . $idAnimal . " demandées";
    }
    public function getContinents()
    {
        echo "données JSON des continents demandées";
    }
    public function getFamilles()
    {
        echo "données JSON des familles demandées";
    }
}
