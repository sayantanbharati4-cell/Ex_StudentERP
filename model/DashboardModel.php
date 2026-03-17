<?php
require_once __DIR__ . '/Database.php';

class DashboardModel {
    private $db;
    
    public function __construct() {
        $this->db = Database::getInstance();
    }
    
    public function getTotalStudents() {
        $result = $this->db->query("SELECT COUNT(*) as total FROM students");
        $row = $result->fetch_assoc();
        return $row['total'];
    }
    
    public function getTotalFaculty() {
        $result = $this->db->query("SELECT COUNT(*) as total FROM faculty");
        $row = $result->fetch_assoc();
        return $row['total'];
    }
    
    public function getTotalCourses() {
        $result = $this->db->query("SELECT COUNT(*) as total FROM courses");
        $row = $result->fetch_assoc();
        return $row['total'];
    }
    
    public function getTotalDepartments() {
        $result = $this->db->query("SELECT COUNT(*) as total FROM departments");
        $row = $result->fetch_assoc();
        return $row['total'];
    }
    
    public function getRecentStudents($limit = 5) {
        $result = $this->db->query("SELECT * FROM students ORDER BY id DESC LIMIT $limit");
        $students = [];
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
        return $students;
    }
    
    public function getAttendanceStats() {
        $result = $this->db->query("
            SELECT 
                SUM(CASE WHEN status = 'present' THEN 1 ELSE 0 END) as present,
                SUM(CASE WHEN status = 'absent' THEN 1 ELSE 0 END) as absent,
                SUM(CASE WHEN status = 'late' THEN 1 ELSE 0 END) as late
            FROM attendance 
            WHERE attendance_date = CURDATE()
        ");
        return $result->fetch_assoc();
    }
}
?>