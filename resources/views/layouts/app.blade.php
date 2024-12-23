<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Site</title>
</head>
<body>
    <header>
        @auth
            <a href="{{ route('logout') }}">Logout</a>
        @else
            <a href="{{ route('login.form') }}">Вход</a>
            <a href="{{ route('register.form') }}">регистрация</a>
        @endauth
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
