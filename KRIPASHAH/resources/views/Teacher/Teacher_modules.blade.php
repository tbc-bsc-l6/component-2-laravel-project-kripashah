<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module: {{ $module->module_name ?? $module->name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: Arial, sans-serif; background:#f4f6f8; margin:0; padding:0; }
        .header { background-color: #343a40; color:white; padding:15px; text-align:center; position:relative; }
        .back-link { position:absolute; right:15px; top:15px; color:white; text-decoration:none; }
        .container { width:90%; margin:auto; padding:20px; }
        h1,h2 { margin-top:20px; }
        table { width:100%; border-collapse:collapse; background:white; }
        th, td { padding:10px; border:1px solid #ddd; text-align:left; }
        th { background:#f0f0f0; }
        .btn { padding:6px 12px; border:none; cursor:pointer; border-radius:3px; }
        .btn-pass { background:green; color:white; }
        .btn-fail { background:red; color:white; }
    </style>
</head>
<body>

<div class="header">
    <h1>Module: {{ $module->module_name ?? $module->name }}</h1>
    <a href="{{ route('teacher.modules') }}" class="back-link">⬅ Back to Modules</a>
</div>

<div class="container">

    <h2>Students Enrolled</h2>
    @if($students->count() > 0)
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Completed At</th>
                <th>Action</th>
            </tr>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        @if($student->pivot->status === 'PASS')
                            <span style="color:green;font-weight:bold;">PASS</span>
                        @elseif($student->pivot->status === 'FAIL')
                            <span style="color:red;font-weight:bold;">FAIL</span>
                        @else
                            In Progress
                        @endif
                    </td>
                    <td>{{ $student->pivot->completed_at ?? '-' }}</td>
                    <td>
                        <form method="POST" action="{{ route('teacher.module.student.grade', ['module'=>$module->id, 'student'=>$student->id]) }}">
                            @csrf
                            <button type="submit" name="status" value="PASS" class="btn btn-pass">PASS</button>
                            <button type="submit" name="status" value="FAIL" class="btn btn-fail">FAIL</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No students enrolled in this module yet.</p>
    @endif

</div>

</body>
</html>
