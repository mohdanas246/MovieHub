<?php

namespace Project\Controller;

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . "/..//Model/MovieModel.php");

use Project\Model\MovieModel;

class MovieController
{

    private $model;

    function __construct()
    {
        $this->model = new MovieModel();
    }

    public function insertValue($tittle, $category, $relaeseYear, $releaseCountry, $shortDesc, $boxOffice, $longDesc, $duration, $production)
    {

        $user = $this->model->movieData($tittle, $category, $relaeseYear, $releaseCountry, $shortDesc, $boxOffice, $longDesc, $duration, $production);
    }

    public function fetchValue(){

        $user = $this->model->getAllMovie();
    }

}