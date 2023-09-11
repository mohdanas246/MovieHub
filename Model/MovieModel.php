<?php
namespace Project\Model;

require_once(__DIR__ . "/..//Model/Access.php");

use Project\Model\Access;

class MovieModel extends Access{

    function __construct()
    {
        $this->openConnection();
    }

    public function movieData($tittle, $category, $relaeseYear, $releaseCountry, $shortDesc,$boxOffice,$longDesc,$duration,$production)
    {
       
        $sql = "INSERT INTO movie (tittle, category_id, release_year, release_country, short_desc,box_office,long_desc,duration,production) VALUE ('$tittle', '$category', '$relaeseYear', '$releaseCountry', '$shortDesc','$boxOffice','$longDesc','$duration','$production')";
        $this->conn->query($sql);
        }

    public function getAllMovie()
    {
    
        $sql = "SELECT * FROM movie";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){

            $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return  $options;
        }
    }

    public function getMovieById(int $id)
    {
  
    }
}