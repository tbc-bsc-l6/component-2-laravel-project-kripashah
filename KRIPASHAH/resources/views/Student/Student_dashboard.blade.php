<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Simple styling -->
    <style>
        body { font-family: Arial, sans-serif; background:#f4f6f8; }
        .container { width:90%; margin:auto; }
        h2 { margin-top:30px; }
        table { width:100%; border-collapse:collapse; background:white; }
        th, td { padding:10px; border:1px solid #ddd; text-align:left; }
        th { background:#f0f0f0; }
        .btn { padding:6px 12px; border:none; cursor:pointer; }
        .btn-enrol { background:#28a745; color:white; }
        .badge-pass { color:green; font-weight:bold; }
        .badge-fail { color:red; font-weight:bold; }
        .alert { padding:10px; background:#fff3cd; margin-top:10px; }
    </style>
</head>
<body>

<div class="container">

    <h1>🎓 Student Dashboard</h1>

    <!-- CURRENT MODULES -->
    <h2>📘 Current Modules</h2>

    @if($currentModules->count() > 0)
        <table>
            <tr>
                <th>Module Name</th>
                <th>Module Code</th>
            </tr>
            @foreach($currentModules as $module)
                <tr>
                    <td>{{ $module->module_name ?? $module->name }}</td>
                    <td>{{ $module->module_code ?? $module->code }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No current modules enrolled.</p>
    @endif

    <!-- COMPLETED MODULES -->
    <h2>✅ Completed Modules</h2>

    @if($completedModules->count() > 0)
        <table>
            <tr>
                <th>Module</th>
                <th>Status</th>
                <th>Completed At</th>
            </tr>
            @foreach($completedModules as $module)
                <tr>
                    <td>{{ $module->module_name ?? $module->name }}</td>
                    <td>
                        @if($module->pivot->status === 'PASS')
                            <span class="badge-pass">PASS</span>
                        @else
                            <span class="badge-fail">FAIL</span>
                        @endif
                    </td>
                    <td>{{ $module->pivot->completed_at }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No completed modules yet.</p>
    @endif

    <!-- AVAILABLE MODULES -->
    @if($currentModules->count() < 4)
        <h2>➕ Available Modules to Enrol</h2>

        @if($availableModules->count() > 0)
            <table>
                <tr>
                    <th>Module</th>
                    <th>Action</th>
                </tr>
                @foreach($availableModules as $module)
                    <tr>
                        <td>{{ $module->module_name ?? $module->name }}</td>
                        <td>
                            <form method="POST" action="{{ route('student.enrol', $module->id) }}">
                                @csrf
                                <button class="btn btn-enrol">Enrol</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <p>No modules available.</p>
        @endif
    @else
        <div class="alert">
            ⚠ You have reached the maximum of 4 enrolled modules.
        </div>
    @endif

</div>

</body>
</html>
