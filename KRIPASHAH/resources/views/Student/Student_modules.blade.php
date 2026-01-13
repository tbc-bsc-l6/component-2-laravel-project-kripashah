<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $module->module_name ?? $module->name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: Arial, sans-serif; background:#f4f6f8; margin:0; padding:0; }
        .container { width:90%; margin:auto; padding:20px; }
        h1,h2 { margin-top:20px; }
        table { width:100%; border-collapse:collapse; background:white; }
        th, td { padding:10px; border:1px solid #ddd; text-align:left; }
        th { background:#f0f0f0; }
        .btn { padding:6px 12px; border:none; cursor:pointer; }
        .btn-enrol { background:#28a745; color:white; }
        .badge-pass { color:green; font-weight:bold; }
        .badge-fail { color:red; font-weight:bold; }
        a { text-decoration:none; color:#007bff; }
    </style>
</head>
<body>

<div class="container">

    <h1>📘 Module: {{ $module->module_name ?? $module->name }}</h1>
    <p>Code: {{ $module->module_code ?? $module->code }}</p>
    <p>Status: {{ $module->available ? 'Available' : 'Unavailable' }}</p>

    @if($module->available && !$currentUser->modules->contains($module->id))
        <form method="POST" action="{{ route('student.enrol', $module->id) }}">
            @csrf
            <button class="btn btn-enrol">Enrol in this module</button>
        </form>
    @endif

    <h2>👨‍🎓 Students Enrolled</h2>
    @if($students->count() > 0)
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Completed At</th>
            </tr>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        @if($student->pivot->status === 'PASS')
                            <span class="badge-pass">PASS</span>
                        @elseif($student->pivot->status === 'FAIL')
                            <span class="badge-fail">FAIL</span>
                        @else
                            <span>In Progress</span>
                        @endif
                    </td>
                    <td>{{ $student->pivot->completed_at ?? '-' }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No students enrolled in this module yet.</p>
    @endif

    <p><a href="{{ route('student.dashboard') }}">⬅ Back to Dashboard</a></p>

</div>

</body>
</html>
