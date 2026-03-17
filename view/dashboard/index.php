<?php
// view/dashboard/index.php
?>
<div class="col-md-9 col-lg-10 p-4" style="background-color: #f8f9fa;">
    <!-- Page Title -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-semibold" style="color: #4a3c31;">Dashboard</h2>
        <div>
            <span class="badge bg-light text-dark p-2"><i class="bi bi-calendar3"></i> <?php echo date('l, F j, Y'); ?></span>
        </div>
    </div>

    <!-- Summary Cards Row -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm" style="background-color: #4a7c59; color: white;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title mb-1">Total Students</h6>
                            <h2 class="mb-0">1,250</h2>
                            <small class="opacity-75"><i class="bi bi-arrow-up"></i> +5.2%</small>
                        </div>
                        <i class="bi bi-people-fill fs-1 opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm" style="background-color: #800000; color: white;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title mb-1">Faculty</h6>
                            <h2 class="mb-0">85</h2>
                            <small class="opacity-75"><i class="bi bi-arrow-up"></i> +2</small>
                        </div>
                        <i class="bi bi-person-badge-fill fs-1 opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm" style="background-color: #5c4e3d; color: white;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title mb-1">Programs</h6>
                            <h2 class="mb-0">12</h2>
                            <small class="opacity-75">Active</small>
                        </div>
                        <i class="bi bi-mortarboard-fill fs-1 opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm" style="background-color: #2c3e50; color: white;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title mb-1">Revenue (MTD)</h6>
                            <h2 class="mb-0">$2.4M</h2>
                            <small class="opacity-75"><i class="bi bi-arrow-up"></i> +8%</small>
                        </div>
                        <i class="bi bi-cash-stack fs-1 opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row g-3 mb-4">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0" style="color: #4a3c31;"><i class="bi bi-graph-up me-2" style="color: #4a7c59;"></i>Student Enrollment Trend</h5>
                </div>
                <div class="card-body">
                    <canvas id="enrollmentChart" style="max-height: 300px;"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0" style="color: #4a3c31;"><i class="bi bi-pie-chart me-2" style="color: #800000;"></i>Attendance Overview</h5>
                </div>
                <div class="card-body">
                    <canvas id="attendanceChart" style="max-height: 250px;"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Students Table -->
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0" style="color: #4a3c31;"><i class="bi bi-table me-2" style="color: #4a7c59;"></i>Recent Student Enrollments</h5>
                    <a href="#" class="btn btn-sm" style="background-color: #4a7c59; color: white;">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light" style="color: #4a3c31;">
                                <tr>
                                    <th>Admission No.</th>
                                    <th>Student Name</th>
                                    <th>Program</th>
                                    <th>Batch</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ADM2024001</td>
                                    <td><i class="bi bi-person-circle me-2" style="color: #4a7c59;"></i>John Smith</td>
                                    <td>B.Tech CSE</td>
                                    <td>2024-2028</td>
                                    <td><span class="badge" style="background-color: #4a7c59; color: white;">Active</span></td>
                                    <td><a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>ADM2024002</td>
                                    <td><i class="bi bi-person-circle me-2" style="color: #4a7c59;"></i>Emma Watson</td>
                                    <td>MBA</td>
                                    <td>2024-2026</td>
                                    <td><span class="badge" style="background-color: #4a7c59; color: white;">Active</span></td>
                                    <td><a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>ADM2024003</td>
                                    <td><i class="bi bi-person-circle me-2" style="color: #4a7c59;"></i>Michael Brown</td>
                                    <td>Diploma in CS</td>
                                    <td>2024-2027</td>
                                    <td><span class="badge" style="background-color: #ffc107; color: #2c3e50;">Pending</span></td>
                                    <td><a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>ADM2024004</td>
                                    <td><i class="bi bi-person-circle me-2" style="color: #4a7c59;"></i>Sarah Johnson</td>
                                    <td>B.Sc Physics</td>
                                    <td>2024-2028</td>
                                    <td><span class="badge" style="background-color: #4a7c59; color: white;">Active</span></td>
                                    <td><a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>ADM2024005</td>
                                    <td><i class="bi bi-person-circle me-2" style="color: #4a7c59;"></i>David Lee</td>
                                    <td>M.Tech VLSI</td>
                                    <td>2024-2026</td>
                                    <td><span class="badge" style="background-color: #dc3545; color: white;">Inactive</span></td>
                                    <td><a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-eye"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions / Upcoming Events Row -->
    <div class="row g-3 mt-3">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0" style="color: #4a3c31;"><i class="bi bi-calendar-event me-2" style="color: #800000;"></i>Upcoming Events</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div><i class="bi bi-circle-fill me-2" style="color: #4a7c59; font-size: 0.6rem;"></i> Internal Exams Start</div>
                            <span class="badge bg-light text-dark">20 Mar 2026</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div><i class="bi bi-circle-fill me-2" style="color: #800000; font-size: 0.6rem;"></i> Parent-Teacher Meeting</div>
                            <span class="badge bg-light text-dark">25 Mar 2026</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div><i class="bi bi-circle-fill me-2" style="color: #5c4e3d; font-size: 0.6rem;"></i> Fee Deadline</div>
                            <span class="badge bg-light text-dark">30 Mar 2026</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0" style="color: #4a3c31;"><i class="bi bi-exclamation-triangle me-2" style="color: #b8a99a;"></i>Alerts & Notices</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <div>Attendance shortage for 15 students in B.Tech CSE.</div>
                    </div>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <div>Fee overdue for 8 students. Please follow up.</div>
                    </div>
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        <div>New academic programs approved for next session.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js Scripts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enrollment Trend Chart
    const ctx1 = document.getElementById('enrollmentChart').getContext('2d');
    new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Enrollments',
                data: [65, 59, 80, 81, 56, 55, 40, 120, 135, 140, 130, 125],
                borderColor: '#4a7c59',
                backgroundColor: 'rgba(74,124,89,0.1)',
                tension: 0.3,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            }
        }
    });

    // Attendance Overview Chart (Pie)
    const ctx2 = document.getElementById('attendanceChart').getContext('2d');
    new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['Present', 'Absent', 'Leave'],
            datasets: [{
                data: [78, 15, 7],
                backgroundColor: ['#4a7c59', '#800000', '#b8a99a'],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom' }
            },
            cutout: '65%'
        }
    });
});
</script>