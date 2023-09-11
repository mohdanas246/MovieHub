<?php

namespace Project\Controller;

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . "/../Model/CategoryModel.php");

use Project\Model\CategoryModel;

class CategoryController
{
    private $model;

    function __construct()
    {
        $this->model = new CategoryModel();
    }

    public function insertValue($name)
    {
        $user = $this->model->insertCategory($name);
        header('location:category.php');
    }
    public function fetchValue(){
        $user = $this->model->getAllCategories();
    }
}
