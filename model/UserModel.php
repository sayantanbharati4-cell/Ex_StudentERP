<?php
// model/UserModel.php
require_once 'Database.php';

class UserModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // For later use
    public function findByEmail($email) {
        $email = $this->db->escapeString($email);
        $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }
}
?>