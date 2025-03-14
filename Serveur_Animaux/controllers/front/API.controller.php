<?php

require_once "models/front/API.manager.php";
class APIController
{
    private $apiManager;

    public function __construct()
    {
        $this->apiManager = new APIManager();
    }

    public function getAnimaux()
    {
        $animaux = $this->apiManager->getDBAnimaux();
        echo "<pre>";
        print_r($animaux);
        echo "</pre>";
    }
    public function getAnimal($idAnimal)
    {
        $ligneAnimal = $this->apiManager->getDBAnimal($idAnimal);
        echo "<pre>";
        print_r($ligneAnimal);
        echo "</pre>";
    }
    public function getContinents()
    {
        $continents = $this->apiManager->getDBContinents();
        Model::sendJSON($continents);
    }
    public function getFamilles()
    {
        $familles = $this->apiManager->getDBFamilles();
        Model::sendJSON($familles);
    }
}
