<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #343a40;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .container {
            padding: 30px;
        }

        .card {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        a.button {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
        }

        a.button:hover {
            background-color: #0056b3;
        }

        .logout {
            float: right;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Admin Dashboard</h1>
    <a href="/logout" class="logout">Logout</a>
</div>

<div class="container">

    <div class="card">
        <h2>Modules</h2>
        <p>Add, view and manage modules.</p>
        <a href="/admin/modules" class="button">Manage Modules</a>
    </div>

    <div class="card">
        <h2>Teachers</h2>
        <p>Create or delete teachers.</p>
        <a href="/admin/teachers" class="button">Manage Teachers</a>
    </div>

    <div class="card">
        <h2>Assign Teacher</h2>
        <p>Assign teachers to modules.</p>
        <a href="/admin/assign-teacher" class="button">Assign Teacher</a>
    </div>

</div>

</body>
</html>
