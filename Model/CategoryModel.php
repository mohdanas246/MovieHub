<?php

namespace Project\Model;

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . "/../Model/Access.php");

use Project\Model\Access;

class CategoryModel extends Access
{

    function __construct()
    {
        $this->openConnection();
    }

    public function insertCategory(string $categoryName)
    {
        $sql = "INSERT INTO category (category_name) VALUE ('$categoryName')";
        $this->conn->query($sql);
    }

    public function getAllCategories()
    {
        $sql = "SELECT * FROM category";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {

            $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $options;
        }
    }

    public function getCategoeyById(int $id)
    {
    }
}
