<?php
namespace Project\Controller;

require_once(__DIR__ . "/..//Model/MovieCastModel.php");

use Project\Model\MovieCastModel;

class MovieCastController{

    private $model;

    function __construct()
    {
        $this->model = new MovieCastModel();
    }
    

    public function insertValue($castName, $shortDesc, $longDesc, $height, $dob){

        $user = $this->model->movieData($castName,$shortDesc,$longDesc,$height,$dob);
        header('location:movieCast.php');

    }
    

    public function fetchValue(){
        $user = $this->model->getAllMovieCast();
    }
    
}

