<?php

namespace Project\Model;

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . "/../Model/Access.php");

use Project\Model\Access;

class LanguageModel extends Access
{

    function __construct()
    {
        $this->openConnection();
    }

    public function languageCategory($name)
    {
        $sql = "INSERT INTO language (language) VALUE ('$name')";
        $this->conn->query($sql);
    }

    public function getAllLanguage()
    {
        $sql = "SELECT * FROM language";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){

            $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $options;
        }
    }

    public function getLanguageById(int $id)
    {
    }
}
