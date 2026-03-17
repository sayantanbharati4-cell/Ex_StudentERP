<?php
// config/config.php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'student_erp');

// Base URL (adjust if needed)
define('BASE_URL', 'http://localhost/studentErpFin');

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>