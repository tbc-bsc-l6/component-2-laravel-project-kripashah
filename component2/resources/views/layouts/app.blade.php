<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
<main class="container">
    <header class="grid">
        <div>
            <h2>Education Admin</h2>
        </div>
        <div class="flex" style="justify-content: flex-end; gap: 1rem; align-items: center;">
            @auth
                <span>{{ auth()->user()->name }} ({{ auth()->user()->role }})</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="secondary">Logout</button>
                </form>
            @endauth
        </div>
    </header>

    @if (session('status'))
        <article>{{ session('status') }}</article>
    @endif

    @if ($errors->any())
        <article>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </article>
    @endif

    {{ $slot ?? '' }}
</main>
</body>
</html>

