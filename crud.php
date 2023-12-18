<?php

require_once 'Database.php';
class crud
{
    private $conn;
    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function executeQuery($table, $action, $data) {
        switch ($action) {
            case 'create':
                return $this->createRecord($table, $data);
            case 'read':
                return $this->readRecord($table, $data['id']);
            case 'update':
                return $this->updateRecord($table, $data['id'], $data);
            case 'delete':
                return $this->deleteRecord($table, $data['id']);
            default:
                return false; // Invalid action
        }
    }


    public function createRecord($table, $data) {
        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array_values($data));

        return $stmt->rowCount() > 0;
    }


    public function readRecord($table, $id) {
        $sql = "SELECT * FROM $table WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function updateRecord($table, $id, $data) {
        $setClause = implode('=?, ', array_keys($data)) . '=?';

        $sql = "UPDATE $table SET $setClause WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array_merge(array_values($data), [$id]));

        return $stmt->rowCount() > 0;
    }


    public function deleteRecord($table, $id) {
        $sql = "DELETE FROM $table WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->rowCount() > 0;
    }


    public function __destruct() {
        $this->conn = null;
    }
}