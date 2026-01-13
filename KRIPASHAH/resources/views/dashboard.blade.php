<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Dashboard - EduPlatform</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* ================= BASIC STYLES ================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #f4f6f8;
            display: flex;
        }

        /* ================= SIDEBAR ================= */
        .sidebar {
            width: 220px;
            background-color: #2c3e50;
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar-header {
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid #34495e;
        }

        .sidebar-header h2 {
            color: #fff;
        }

        .sidebar-nav ul {
            list-style: none;
            padding: 20px;
        }

        .sidebar-nav li {
            padding: 12px 0;
            cursor: pointer;
        }

        .sidebar-nav li.active, .sidebar-nav li:hover {
            background-color: #34495e;
            padding-left: 10px;
            transition: 0.3s;
        }

        .sidebar-footer {
            padding: 15px;
            border-top: 1px solid #34495e;
            display: flex;
            align-items: center;
        }

        .sidebar-footer img {
            border-radius: 50%;
            margin-right: 10px;
        }

        /* ================= MAIN AREA ================= */
        .main-area {
            flex: 1;
            padding: 30px;
        }

        .top-header h1 {
            font-size: 28px;
            margin-bottom: 5px;
        }

        .top-header p {
            color: #555;
            margin-bottom: 20px;
        }

        /* ================= STAT CARDS ================= */
        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            text-align: center;
        }

        .stat-card h3 {
            color: #888;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .stat-card h2 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .stat-card p {
            color: green;
        }

        /* ================= LOWER SECTION ================= */
        .lower-section {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .chart-section, .activity-section {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            min-width: 300px;
        }

        .chart-placeholder {
            height: 200px;
            background-color: #e9ecef;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
            font-size: 14px;
        }

        .activity-section ul {
            list-style: disc;
            padding-left: 20px;
            margin-top: 10px;
        }

        .activity-section li {
            padding: 5px 0;
            color: #555;
        }
    </style>
</head>
<body>

    <!-- ================= SIDEBAR ================= -->
    <aside class="sidebar">

        <div class="sidebar-header">
            <h2>EduPlatform</h2>
        </div>

        <nav class="sidebar-nav">
            <ul>
                <li class="active">Dashboard</li>
                <li>Courses</li>
                <li>Students</li>
                <li>Teachers</li>
                <li>Grades</li>
                <li>Reports</li>
                <li>Settings</li>
            </ul>
        </nav>

        <div class="sidebar-footer">
            <img src="https://via.placeholder.com/40" alt="User">
            <div>
                <p>Admin Name</p>
                <small>Administrator</small>
            </div>
        </div>

    </aside>
    <!-- ================= END SIDEBAR ================= -->

    <!-- ================= MAIN AREA ================= -->
    <main class="main-area">

        <!-- Top Header -->
        <header class="top-header">
            <h1>Dashboard Overview</h1>
            <p>Welcome back! Here's your educational platform summary.</p>
        </header>

        <!-- Statistics Cards -->
        <section class="stats-cards">
            <div class="stat-card">
                <h3>Total Students</h3>
                <h2>1,235</h2>
                <p>+5% this semester</p>
            </div>

            <div class="stat-card">
                <h3>Total Courses</h3>
                <h2>45</h2>
                <p>+2 new courses</p>
            </div>

            <div class="stat-card">
                <h3>Teachers</h3>
                <h2>28</h2>
                <p>+1 this month</p>
            </div>

            <div class="stat-card">
                <h3>Average Grade</h3>
                <h2>88%</h2>
                <p>Improved by 3%</p>
            </div>
        </section>

        <!-- Lower Section -->
        <section class="lower-section">

            <!-- Chart Section -->
            <div class="chart-section">
                <h3>Student Enrollment (Last 6 Months)</h3>
                <div class="chart-placeholder">
                    Chart Area (Add Chart.js for graphs)
                </div>
            </div>

            <!-- Activity Section -->
            <div class="activity-section">
                <h3>Recent Activity</h3>
                <ul>
                    <li>New student registered: Alex Rivera</li>
                    <li>Grade submitted: Math 101</li>
                    <li>Course added: Science Lab</li>
                    <li>Teacher assigned: Mr. Johnson</li>
                    <li>Report exported: Semester Summary</li>
                </ul>
            </div>

        </section>

    </main>
    <!-- ================= END MAIN AREA ================= -->

</body>
</html>
