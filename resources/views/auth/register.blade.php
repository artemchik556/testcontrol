<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <h1>Регистрация</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email_confirmation">Подтвердите пароль:</label>
            <input type="email" name="email_confirmation" id="email_confirmation" required>
        </div>

        <div>
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <div>{{ $message }}</div>
            @enderror
        </div>



        <button type="submit">Зарегистрироваться</button>
    </form>

    <a href="{{ route('login.form') }}">Уже есть аккаунт? Войти</a>
</body>
</html>
