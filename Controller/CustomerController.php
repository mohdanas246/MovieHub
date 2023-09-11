<?php

namespace Project\Controller;

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . "/../Model//CustomerModel.php");

use Project\Model\CustomerModel;

class CustomerController
{
    private $model;

    function __construct()
    {
        $this->model = new CustomerModel();
    }

    public function insertValue($firstName, $lastName, $email, $password)
    {
        $user = $this->model->customerData($firstName, $lastName, $email, $password);
        // header('location:customer.php');
    }

    public function fetchValue(){
        $user = $this->model->getAllCustomer();
    }
}
