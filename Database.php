<?php

require_once 'config.php';

class Database {
    private $conn;
    public function __construct() {
      // rendre les variables de connexion accessible a la portée locale du constructeur.
        global $host, $username, $password, $database;

        try {
            // Créer une nouvelle connexion PDO  à la base de données MySQL
            $this->conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function __destruct() {
        $this->conn = null;
    }
}
