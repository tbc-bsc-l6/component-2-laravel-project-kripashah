<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Dashboard</title>
    <link rel="stylesheet" href="Style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dashboard-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>ClinicHub</h2>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li class="active"><span>Dashboard</span></li>
                    <li><span>Patients</span></li>
                    <li><span>Appointments</span></li>
                    <li><span>CRF Forms</span></li>
                    <li><span>Reports</span></li>
                    <li><span>Settings</span></li>
                </ul>
            </nav>
            <div class="sidebar-footer">
                <div class="user-info">
                    <img src="https://via.placeholder.com/40" alt="User">
                    <div>
                        <p>Dr. Emily Chen</p>
                        <small>Administrator</small>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Area -->
        <main class="main-area">
            <header class="top-header">
                <h1>Dashboard Overview</h1>
                <p>Good morning! Here's your clinic summary for today.</p>
            </header>

            <!-- Stats Cards -->
            <section class="stats-cards">
                <div class="stat-card patients">
                    <h3>Total Patients</h3>
                    <h2>2,156</h2>
                    <p>+8% this month</p>
                </div>
                <div class="stat-card appointments">
                    <h3>Appointments Today</h3>
                    <h2>32</h2>
                    <p>12 completed</p>
                </div>
                <div class="stat-card crf">
                    <h3>CRF Submitted</h3>
                    <h2>145</h2>
                    <p>This week</p>
                </div>
                <div class="stat-card revenue">
                    <h3>Monthly Revenue</h3>
                    <h2>$62,480</h2>
                    <p>+22% growth</p>
                </div>
            </section>

            <!-- Lower Section -->
            <section class="lower-section">
                <div class="chart-section">
                    <h3>Patient Trends (Last 6 Months)</h3>
                    <div class="chart-placeholder">Chart Area (Add Chart.js for real graphs)</div>
                </div>
                <div class="activity-section">
                    <h3>Recent Activity</h3>
                    <ul>
                        <li>New patient: Alex Rivera</li>
                        <li>CRF approved: ID #4567</li>
                        <li>Appointment scheduled: 3:00 PM</li>
                        <li>Report exported: Weekly Summary</li>
                        <li>Staff login: Nurse Taylor</li>
                    </ul>
                </div>
            </section>
        </main>
    </div>
</body>
</html>