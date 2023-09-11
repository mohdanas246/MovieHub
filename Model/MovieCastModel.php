<?php

namespace Project\Model;

require_once(__DIR__ . "/..//Model/Access.php");

use Project\Model\Access;

class MovieCastModel extends Access
{

    function __construct()
    {
        $this->openConnection();
    }

    public function movieData($castName, $shortDesc, $longDesc, $height, $dob)
    {

        $sql = "INSERT INTO movie_cast (cast_name, short_desc, long_desc, height, DOB) VALUE ('$castName', '$shortDesc', '$longDesc', '$height', '$dob')";
        $this->conn->query($sql);
    }

    public function getAllMovieCast()
    {
        $sql = "SELECT * FROM movie_cast";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {

            $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $options;
        }
    }

    public function getMovieCastById(int $id)
    {
    }
}
