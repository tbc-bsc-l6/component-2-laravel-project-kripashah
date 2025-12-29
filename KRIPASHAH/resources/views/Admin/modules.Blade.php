<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Modules</title>

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
            margin-bottom: 30px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        .danger {
            background-color: red;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Manage Modules</h1>
</div>

<div class="container">

    <!-- ADD MODULE FORM -->
    <div class="card">
        <h2>Add New Module</h2>

        <form method="POST" action="/admin/module/add">
            @csrf

            <label>Module Name</label>
            <input type="text" name="module_name" required>

            <label>Module Code</label>
            <input type="text" name="module_code" required>

            <button type="submit">Add Module</button>
        </form>
    </div>

    <!-- MODULE LIST -->
    <div class="card">
        <h2>All Modules</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Module Name</th>
                <th>Module Code</th>
                <th>Action</th>
            </tr>

            @foreach($modules as $module)
            <tr>
                <td>{{ $module->id }}</td>
                <td>{{ $module->module_name }}</td>
                <td>{{ $module->module_code }}</td>
                <td>
                    <form method="POST" action="/admin/module/{{ $module->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
    </div>

    <a href="/admin/dashboard">⬅ Back to Dashboard</a>

</div>

</body>
</html>
