<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Teachers</title>

    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f6f8; margin: 0; padding: 0; }
        .header { background-color: #343a40; color: white; padding: 15px; text-align: center; position: relative; }
        .container { padding: 30px; }
        .card { background-color: white; padding: 20px; margin-bottom: 30px; border-radius: 5px; box-shadow: 0 0 5px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 8px; margin-bottom: 10px; }
        button { padding: 10px 15px; background-color: #007bff; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid #ccc; }
        th, td { padding: 10px; text-align: left; }
        a { text-decoration: none; color: #007bff; }
        .danger { background-color: red; color: white; border: none; padding: 5px 10px; cursor: pointer; }
        .back-link { position: absolute; right: 15px; top: 15px; color: white; }
    </style>
</head>
<body>

<div class="header">
    <h1>Manage Teachers</h1>
    <a href="{{ route('admin.dashboard') }}" class="back-link">⬅ Back to Dashboard</a>
</div>

<div class="container">

    <!-- ADD TEACHER FORM -->
    <div class="card">
        <h2>Add New Teacher</h2>
        <form method="POST" action="{{ route('teacher.store') }}">
            @csrf
            <label>Teacher Name</label>
            <input type="text" name="teacher_name" required>

            <label>Email</label>
            <input type="email" name="teacher_email" required>

            <label>Phone</label>
            <input type="text" name="teacher_phone" required>

            <button type="submit">Add Teacher</button>
        </form>
    </div>

    <!-- TEACHER LIST -->
    <div class="card">
        <h2>All Teachers</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>

            @forelse($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->teacher_name }}</td>
                <td>{{ $teacher->teacher_email }}</td>
                <td>{{ $teacher->teacher_phone }}</td>
                <td>
                    <form method="POST" action="{{ route('teacher.destroy', $teacher->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="danger" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No teachers found.</td>
            </tr>
            @endforelse

        </table>
    </div>

</div>
</body>
</html>
