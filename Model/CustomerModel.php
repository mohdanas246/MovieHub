<?php

namespace Project\Model;

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(__DIR__ . "/../Model/Access.php");

use Project\Model\Access;

class CustomerModel extends Access
{

    function __construct()
    {
        $this->openConnection();
    }

    public function customerData($firstName, $lastName, $email, $password)
    {
       
        $sql = "INSERT INTO customer (first_name, last_name, email, password) VALUE ('$firstName', '$lastName', '$email', '$password')";
        $this->conn->query($sql);    }

    public function getAllCustomer()
    {
        $sql = "SELECT * FROM customer";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){

            $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $options;
        }

    }

    public function getCustomerById(int $id)
    {
    }
}
