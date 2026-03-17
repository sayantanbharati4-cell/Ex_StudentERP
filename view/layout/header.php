<?php
// view/layout/header.php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user_id'])) {
    header('Location: ' . BASE_URL . '/view/auth/login.php');
    exit;
}
$current_page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student ERP Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/custom.css">
    <!-- Favicon placeholder -->
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>/assets/images/favicon.png">
</head>
<body>
    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #4a7c59; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="<?php echo BASE_URL; ?>/index.php?page=dashboard">
                <i class="bi bi-mortarboard-fill me-2"></i>StudentERP
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="topNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white <?php echo $current_page == 'dashboard' ? 'active fw-bold' : ''; ?>" href="<?php echo BASE_URL; ?>/index.php?page=dashboard"><i class="bi bi-speedometer2 me-1"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white <?php echo $current_page == 'academic-monitoring' ? 'active fw-bold' : ''; ?>" href="<?php echo BASE_URL; ?>/index.php?page=academic-monitoring"><i class="bi bi-clipboard-data me-1"></i>Academic Monitoring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white <?php echo $current_page == 'institutes' ? 'active fw-bold' : ''; ?>" href="<?php echo BASE_URL; ?>/index.php?page=institutes"><i class="bi bi-building me-1"></i>Institutes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white <?php echo $current_page == 'academic-programs' ? 'active fw-bold' : ''; ?>" href="<?php echo BASE_URL; ?>/index.php?page=academic-programs"><i class="bi bi-book me-1"></i>Academic Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white <?php echo $current_page == 'faculty' ? 'active fw-bold' : ''; ?>" href="<?php echo BASE_URL; ?>/index.php?page=faculty"><i class="bi bi-people me-1"></i>Faculty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white <?php echo $current_page == 'settings' ? 'active fw-bold' : ''; ?>" href="<?php echo BASE_URL; ?>/index.php?page=settings"><i class="bi bi-gear me-1"></i>Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white <?php echo $current_page == 'profile' ? 'active fw-bold' : ''; ?>" href="<?php echo BASE_URL; ?>/index.php?page=profile"><i class="bi bi-person-circle me-1"></i>Profile</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> <?php echo $_SESSION['user_name']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/index.php?page=profile">Profile</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/index.php?page=settings">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/controller/AuthController.php?action=logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">