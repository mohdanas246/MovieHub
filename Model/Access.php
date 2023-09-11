<?php

namespace Project\Model;

use mysqli;

class Access
{
    const SERVERNAME = "localhost";
    const USERNAME = "anas";
    const PASSWORD = "Codilar";
    const DBNAME = "MovieDB";



    protected $conn;

    public function openConnection()
    {

        $this->conn = new mysqli(self::SERVERNAME, self::USERNAME, self::PASSWORD, self::DBNAME);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } else {

            return $this->conn;
        }
    }

    public function closeConnection(mysqli $conn)
    {
        $conn->close();
    }
}
