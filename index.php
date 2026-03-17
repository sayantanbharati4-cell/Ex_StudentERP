<?php
// index.php
require_once 'config/config.php';

// If user is logged in, load dashboard layout
if (isset($_SESSION['user_id'])) {
    // Determine page
    $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
    $allowed_pages = ['dashboard', 'academic-monitoring', 'institutes', 'academic-programs', 'faculty', 'settings', 'profile'];
    if (!in_array($page, $allowed_pages)) {
        $page = 'dashboard';
    }

    // Include header
    include 'view/layout/header.php';
    
    // Include appropriate sidebar based on page
    $current_page = $page;
    include 'view/layout/sidebar.php';
    
    // Main content area
    echo '<div class="col-md-9 col-lg-10 p-4" style="background-color: #f8f9fa;">';
    // Load page specific content (for now just dashboard content, others can be added later)
    if ($page == 'dashboard') {
        include 'view/dashboard/index.php';
    } else {
        echo '<h2>' . ucfirst(str_replace('-', ' ', $page)) . '</h2>';
        echo '<p>Content for ' . ucfirst(str_replace('-', ' ', $page)) . ' will go here.</p>';
    }
    echo '</div>';
    
    // Include footer
    include 'view/layout/footer.php';
} else {
    // Show landing page (already in index.php, but we need to display it)
    // To avoid duplication, we'll include a separate landing view
    include 'view/landing.php';
}
?>