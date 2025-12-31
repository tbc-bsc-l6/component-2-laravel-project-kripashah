<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - EduAdmin</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="Style.css">
</head>
<body class="h-full flex flex-col bg-gray-50">

    <!-- Header -->
    <header class="header bg-white shadow-sm">
        <div class="container flex justify-between items-center py-4">
            <h1 class="logo text-3xl font-bold text-indigo-600">EduAdmin</h1>
            <div class="auth-links">
                <a href="index.html" class="btn btn-outline">Home</a>
                <a href="about.html" class="btn btn-primary ml-4">About</a>
            </div>
        </div>
    </header></br></br>

    <!-- Hero Section -->
    <section class="hero py-12 md:py-20">
        <div class="container grid-hero">
            <div class="hero-text">
                <h1 class="title text-4xl md:text-5xl">About EduAdmin</h1>
                <p class="description text-lg md:text-xl text-gray-600 mt-6 max-w-lg">
                    We are passionate about transforming school administration with simple, modern, and powerful tools designed for educators and institutions.
                </p>
            </div>
            </br></br>
            <div class="hero-image flex justify-center items-center">
                <img src="images/Building.jpg" 
                     alt="Modern School Building" 
                     class="w-full max-w-sm rounded-2xl shadow-2xl object-cover">
                <!-- Fallback if local image missing -->
                <!-- <img src="https://static.vecteezy.com/system/resources/previews/023/594/645/non_2x/modern-school-building-exterior-flat-education-illustration-vector.jpg" alt="School"> -->
            </div>
        </div>
    </section>
</br></br></br>
    <!-- Our Story -->
    <section class="container py-16">
        <div class="text-center max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Our Story</h2>
            <p class="text-lg text-gray-600 leading-relaxed max-w-3xl mx-auto">
                EduAdmin was born from the real challenges faced by teachers and school administrators. We saw outdated systems slowing down daily operations and decided to build something better — a clean, intuitive platform that saves time and lets educators focus on what matters most: teaching and learning.
            </p>
        </div>
    </section></br></br>

    <!-- Mission & Vision -->
    <section class="bg-indigo-50 py-16">
        <div class="container grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
            <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl text-center hover:shadow-2xl transition-shadow">
                <h3 class="text-2xl md:text-3xl font-bold text-indigo-600 mb-6">Our Mission</h3>
                <p class="text-gray-700 text-lg leading-relaxed">
                    To empower schools worldwide with affordable, easy-to-use management tools that streamline administration and enhance educational outcomes.
                </p>
            </div></br>
            <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl text-center hover:shadow-2xl transition-shadow">
                <h3 class="text-2xl md:text-3xl font-bold text-indigo-600 mb-6">Our Vision</h3>
                <p class="text-gray-700 text-lg leading-relaxed">
                    A world where every school runs efficiently, teachers thrive, and students get the best possible learning experience.
                </p>
            </div>
        </div>
    </section></br></br>

    <!-- Team Section -->
    <section class="container py-16">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">Meet Our Team</h2>
        <div class="grid md:grid-cols-3 gap-12 max-w-5xl mx-auto">
            <div class="text-center">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" 
                     alt="Sarah Johnson" 
                     class="w-40 h-40 mx-auto rounded-full object-cover shadow-lg border-4 border-white">
                <h4 class="text-xl font-semibold mt-6">Sarah Johnson</h4>
                <p class="text-indigo-600 font-medium">Founder & CEO</p>
            </div>
            <div class="text-center">
                <img src="https://randomuser.me/api/portraits/men/86.jpg" 
                     alt="Michael Chen" 
                     class="w-40 h-40 mx-auto rounded-full object-cover shadow-lg border-4 border-white">
                <h4 class="text-xl font-semibold mt-6">Michael Chen</h4>
                <p class="text-indigo-600 font-medium">Lead Developer</p>
            </div>
            <div class="text-center">
                <img src="https://randomuser.me/api/portraits/women/68.jpg" 
                     alt="Emma Rodriguez" 
                     class="w-40 h-40 mx-auto rounded-full object-cover shadow-lg border-4 border-white">
                <h4 class="text-xl font-semibold mt-6">Emma Rodriguez</h4>
                <p class="text-indigo-600 font-medium">Education Specialist</p>
            </div>
        </div>
    </section></br></br>

    <!-- Footer -->
    <footer class="footer bg-white border-t border-gray-200 mt-auto">
        <div class="container text-center py-8">
            <p class="footer-text text-gray-600">
                © 2025 EduAdmin. All rights reserved. Made for schools and educators.
            </p>
        </div>
    </footer>

</body>
</html>