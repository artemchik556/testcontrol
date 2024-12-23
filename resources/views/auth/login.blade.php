<form method="POST" action="{{ route('login.form') }}">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        @error('email')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" required>
        @error('password')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Войти</button>
</form>

<a href="{{ route('register') }}">Еще нет аккаунта? Зарегистрироваться</a>
