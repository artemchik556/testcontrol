<!-- resources/views/recipes/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>


    <form method="POST" action="{{ route('recipes.store') }}">
        @csrf

        <div>
            <label for="title">Мой лот</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>

    </form>
</body>
</html>
