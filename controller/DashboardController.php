<?php
require_once __DIR__ . '/../model/DashboardModel.php';
require_once __DIR__ . '/../model/StudentModel.php';

class DashboardController {
    private $dashboardModel;
    private $studentModel;
    
    public function __construct() {
        $this->dashboardModel = new DashboardModel();
        $this->studentModel = new StudentModel();
    }
    
    public function index() {
        $page_title = 'Dashboard';
        $current_page = 'dashboard';
        
        // Get statistics
        $totalStudents = $this->dashboardModel->getTotalStudents();
        $totalFaculty = $this->dashboardModel->getTotalFaculty();
        $totalCourses = $this->dashboardModel->getTotalCourses();
        $totalDepartments = $this->dashboardModel->getTotalDepartments();
        
        // Get recent students
        $recentStudents = $this->dashboardModel->getRecentStudents(5);
        
        // Get attendance stats
        $attendanceStats = $this->dashboardModel->getAttendanceStats();
        
        // Project allocation data from PDF
        $projectAllocation = [
            ['module' => 'Student Information Management', 'students' => ['SAYANTAN BHARATI', 'SAYAN PAUL', 'SAYANI BERA']],
            ['module' => 'Attendance Tracking', 'students' => ['PRIVANKA DAS', 'PALLABI HALDER', 'PARAMITA DAS']],
            ['module' => 'Academic Performance', 'students' => ['DIBADRITA BHADRA', 'SUDARSHAN PAL', 'ARDHENDU SEKHAR MAITY']],
            ['module' => 'Course Management', 'students' => ['PAYEL KHAN', 'UPAMA PARAMANIK', 'MOU DAS']],
            ['module' => 'Examination Management', 'students' => ['PANKAJ KUMAR', 'SK MD SADIQUE', 'BISHESWAR BHATTACHARJEE']],
            ['module' => 'Fee Management', 'students' => ['ROHIT MAITY', 'SK ASIF', 'PALASH MONDAL']],
        ];
        
        // Include the view
        include __DIR__ . '/../view/dashboard/index.php';
    }
}
?>