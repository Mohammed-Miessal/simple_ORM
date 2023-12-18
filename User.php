<?php

require_once 'Database.php';


// This script is for Static CRUD

class User {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }
    public function createUser($username, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$username, $email, $hashedPassword]);

        return $stmt->rowCount() > 0;
    }

    public function readUser($id) {
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser($id, $username, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE users SET username=?, email=?, password=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$username, $email, $hashedPassword, $id]);

        return $stmt->rowCount() > 0;
    }

    public function deleteUser($id) {
        $sql = "DELETE FROM users WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->rowCount() > 0;
    }

    public function __destruct() {
        $this->conn = null;
    }
}

// Usage example:

$user = new User();

// // Example of creating a new user
// $user->createUser("Mohammed Miessal", "mohammedmiessal@gmail.com", "password123");

// //  Example of reading a user by ID
 $userId = 1;
 $userData = $user->readUser($userId);
 print_r($userData);

// // Example of updating a user
// $user->updateUser(1, "john_updated", "john_updated@example.com", "new_password");

// // Example of deleting a user
// $user->deleteUser(5);

