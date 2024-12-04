<?php

class Database {
    private $conn;

    public function __construct($config){
        try {
            $this->conn = new PDO(
                "mysql:host=" . $config['host'] . ";dbname=" . $config['db_name'],
                $config['username'],
                $config['password']
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception){
            echo "erro de conexão:" . $exception->getMessage();
        }
    }

        public function getConnection(){
            return $this->conn;
        }
}