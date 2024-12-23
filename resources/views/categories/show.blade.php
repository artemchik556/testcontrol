<h1>Лоты {{ $category->name }}</h1>
@foreach ($recipes as $recipe)
    <div>
        <h2><a href="{{ route('recipes.show', $recipe) }}">{{ $recipe->title }}</a></h2>
        <p>{{ $recipe->text }}</p>
    </div>
@endforeach
