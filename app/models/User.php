<?php
require_once 'app/config/db.php';

class User {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function register($username, $password) {
        $stmt = $this->db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param("ss", $username, $hashed);
        return $stmt->execute();
    }

    public function login($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();

        if ($result && password_verify($password, $result['password'])) {
            session_start();
            $_SESSION["username"] = $username;
            return true;
        }
        return false;
    }
}
