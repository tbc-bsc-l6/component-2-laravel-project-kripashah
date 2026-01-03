<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - School Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style.css">
</head>
<body class="h-full flex flex-col bg-gray-50">

    @include('header')<!-- Header -->
    <header class="header bg-white shadow-sm">
        <div class="container flex justify-between items-center py-4">
            <h1 class="logo text-3xl font-bold text-indigo-600">Admin</h1>
            <div class="auth-links">
                <a href="#" class="btn btn-outline">Log in</a>
                <a href="#" class="btn btn-primary ml-4">Get Started</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero py-12 md:py-20 bg-gradient-to-br from-indigo-50 via-white to-purple-50">
        <div class="container grid-hero items-center">
            <div class="hero-text text-center md:text-left max-w-2xl mx-auto md:mx-0">
                <h1 class="title text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">Welcome to Admin</h1>
                <p class="description text-lg md:text-xl text-gray-600 mt-6">
                    A simple and powerful school management system to handle students, teachers, classes, attendance, grades, and more — all in one place.
                </p>
                <a href="#" class="btn btn-primary btn-large mt-10 inline-block">
                    Enter Dashboard →
                </a>
            </div>
            <div class="hero-image flex justify-center mt-10 md:mt-0">
                <img src="https://www.shutterstock.com/image-vector/large-school-building-featuring-clock-260nw-2639832975.jpg" 
                     alt="Cute Modern School Building" 
                     class="w-full max-w-sm rounded-3xl shadow-2xl border-4 border-white">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container py-16">
        <div class="grid gap-12">
            <div class="card hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/006/582/458/small/school-backpack-set-kids-rucksack-knapsack-isolated-on-white-background-bag-with-supplies-ruler-pencil-paper-pupil-satchel-children-education-back-to-school-concept-flat-illustration-vector.jpg" alt="Students" class="feature-icon">
                <h3 class="card-title">Students</h3>
                <p class="card-desc">Manage student profiles, enrollment, and academic records easily.</p>
            </div>
            <div class="card hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/005/330/011/small/teaching-class-flat-color-illustration-vector.jpg" alt="Teachers" class="feature-icon">
                <h3 class="card-title">Teachers</h3>
                <p class="card-desc">Track faculty details, assignments, and class schedules.</p>
            </div>
            <div class="card hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <img src="https://thumbs.dreamstime.com/b/school-education-training-online-course-library-books-color-icon-set-skill-growth-knowledge-geography-astronomy-chemistry-360733426.jpg" alt="Courses & Classes" class="feature-icon">
                <h3 class="card-title">Courses & Classes</h3>
                <p class="card-desc">Organize curriculum, timetables, and subjects efficiently.</p>
            </div>
            <div class="card hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <img src="https://www.shutterstock.com/image-vector/attendance-roll-icon-set-multiple-260nw-2678657635.jpg" alt="Attendance" class="feature-icon">
                <h3 class="card-title">Attendance</h3>
                <p class="card-desc">Daily attendance tracking with reports and alerts.</p>
            </div>
            <div class="card hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/012/689/119/small/report-card-icon-3d-element-free-vector.jpg" alt="Grades & Reports" class="feature-icon">
                <h3 class="card-title">Grades & Reports</h3>
                <p class="card-desc">Record exams, generate report cards and analytics.</p>
            </div>
            <div class="card hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <img src="https://media.istockphoto.com/id/1372184358/vector/pixel-art-graduation-cap-vector-icon-for-8bit-game.jpg?s=612x612&w=is&k=20&c=xqKVL0JzOuoYCHYjHqfPRxVEWuto7_-ix3CG47Mwz0k=" alt="Admin Settings" class="feature-icon">
                <h3 class="card-title">Admin Settings</h3>
                <p class="card-desc">User roles, school info, and system configuration.</p>
            </div>
        </div>
    </section>

    @include('Footer')<!-- Header --><!-- Footer -->
    <footer class="footer bg-white border-t border-gray-200 mt-auto">
        <div class="container text-center py-8">
            <p class="footer-text text-gray-600">
                © 2025 EduAdmin. All rights reserved. Made for schools and educators.
            </p>
        </div>
    </footer>

</body>
</html>