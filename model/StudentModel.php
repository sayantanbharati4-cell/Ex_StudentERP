<?php
require_once __DIR__ . '/Database.php';

class StudentModel {
    private $db;
    
    public function __construct() {
        $this->db = Database::getInstance();
    }
    
    public function getAllStudents() {
        $result = $this->db->query("
            SELECT s.*, d.department_name, b.batch_name 
            FROM students s
            LEFT JOIN departments d ON s.department_id = d.id
            LEFT JOIN batches b ON s.batch_id = b.id
            ORDER BY s.id DESC
        ");
        
        $students = [];
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
        return $students;
    }
    
    public function getStudentById($id) {
        $id = $this->db->escapeString($id);
        $result = $this->db->query("SELECT * FROM students WHERE id = '$id'");
        return $result->fetch_assoc();
    }
    
    public function addStudent($data) {
        $name = $this->db->escapeString($data['name']);
        $email = $this->db->escapeString($data['email']);
        $phone = $this->db->escapeString($data['phone']);
        $reg_no = $this->db->escapeString($data['reg_no']);
        $department_id = $this->db->escapeString($data['department_id']);
        $batch_id = $this->db->escapeString($data['batch_id']);
        
        $sql = "INSERT INTO students (name, email, phone, reg_no, department_id, batch_id) 
                VALUES ('$name', '$email', '$phone', '$reg_no', '$department_id', '$batch_id')";
        
        return $this->db->query($sql);
    }
    
    public function updateStudent($id, $data) {
        $id = $this->db->escapeString($id);
        $name = $this->db->escapeString($data['name']);
        $email = $this->db->escapeString($data['email']);
        $phone = $this->db->escapeString($data['phone']);
        $department_id = $this->db->escapeString($data['department_id']);
        $batch_id = $this->db->escapeString($data['batch_id']);
        
        $sql = "UPDATE students 
                SET name = '$name', email = '$email', phone = '$phone', 
                    department_id = '$department_id', batch_id = '$batch_id'
                WHERE id = '$id'";
        
        return $this->db->query($sql);
    }
    
    public function deleteStudent($id) {
        $id = $this->db->escapeString($id);
        return $this->db->query("DELETE FROM students WHERE id = '$id'");
    }
}
?>