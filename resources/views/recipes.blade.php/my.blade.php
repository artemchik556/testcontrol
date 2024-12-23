<!-- resources/views/recipes/my.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лоты</title>
</head>
<body>
    <h1>Мои лоты</h1>

    <ul>
        @foreach ($recipes as $recipe)
            <li>{{ $recipe->title }} — {{ $recipe->category->name }} — {{ $recipe->created_at->diffForHumans() }}</li>
        @endforeach
    </ul>

    <a href="{{ route('recipes.create') }}">Ставить ставку</a>
</body>
</html>
