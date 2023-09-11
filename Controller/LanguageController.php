<?php
namespace Project\Controller;

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . "/../Model//LanguageModel.php");

use Project\Model\LanguageModel;

class LanguageController
{
    private $model;

    function __construct()
    {
        $this->model = new LanguageModel();
    }

    public function insertValue($name)
    {
        $user = $this->model->languageCategory($name);
        header('location:language.php');
    }

    public function fetchValue()
    {
        $user = $this->model->getAllLanguage();
    }
}