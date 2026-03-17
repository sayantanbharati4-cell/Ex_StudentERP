<?php
// view/layout/sidebar.php
$current_page = isset($current_page) ? $current_page : 'dashboard';
?>
<!-- Sidebar -->
<div class="col-md-3 col-lg-2 px-0" style="background-color: #2c3e50; min-height: calc(100vh - 56px); transition: all 0.3s;">
    <div class="d-flex flex-column p-3">
        <!-- Toggle button -->
        <button class="btn btn-sm mb-3" style="background-color: #b8a99a; color: #2c3e50;" onclick="toggleSidebar()">
            <i class="bi bi-layout-sidebar-inset"></i> Toggle Sidebar
        </button>
        <div class="sidebar-content">
            <?php if ($current_page == 'academic-monitoring'): ?>
                <h6 class="text-white-50 small text-uppercase fw-bold mb-3">Academic Monitoring</h6>
                <ul class="nav nav-pills flex-column gap-2">
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-person me-2"></i> Student Information (SIM)</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-calendar-check me-2"></i> Attendance Tracking</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-bar-chart me-2"></i> Academic Performance</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-book me-2"></i> Course Management</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-pencil-square me-2"></i> Examination Management</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-cash me-2"></i> Fee & Financial</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-chat me-2"></i> Communication</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-journal me-2"></i> Library Management</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-people me-2"></i> Parent Portal</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-graph-up me-2"></i> Analytics</a></li>
                </ul>
            <?php elseif ($current_page == 'institutes'): ?>
                <h6 class="text-white-50 small text-uppercase fw-bold mb-3">Institutes</h6>
                <ul class="nav nav-pills flex-column gap-2">
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-building me-2"></i> Manage Institutes</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-plus-circle me-2"></i> Add Institute</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-tag me-2"></i> Institute Types</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-diagram-3 me-2"></i> Departments</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-code-square me-2"></i> Branches</a></li>
                </ul>
            <?php elseif ($current_page == 'academic-programs'): ?>
                <h6 class="text-white-50 small text-uppercase fw-bold mb-3">Academic Programs</h6>
                <ul class="nav nav-pills flex-column gap-2">
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-mortarboard me-2"></i> Programs & Courses</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-grid me-2"></i> Batch Management</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-journal-text me-2"></i> Subjects</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-calendar-week me-2"></i> Class Scheduling</a></li>
                </ul>
            <?php else: ?>
                <h6 class="text-white-50 small text-uppercase fw-bold mb-3">Main Menu</h6>
                <ul class="nav nav-pills flex-column gap-2">
                    <li class="nav-item"><a href="<?php echo BASE_URL; ?>/index.php?page=dashboard" class="nav-link text-white"><i class="bi bi-speedometer2 me-2"></i> Dashboard Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-people me-2"></i> All Students</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-person-badge me-2"></i> Faculty List</a></li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
<script>
function toggleSidebar() {
    var sidebar = document.querySelector('.sidebar-content');
    if (sidebar.style.display === 'none') {
        sidebar.style.display = 'block';
    } else {
        sidebar.style.display = 'none';
    }
}
</script>