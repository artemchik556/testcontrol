<!-- resources/views/recipes/index.blade.php -->
@extends('layouts.app')

@section('content')
    
    <ul>
        @foreach ($recipes as $recipe)
            <li>
                <a href="{{ route('recipes.show', $recipe) }}">{{ $recipe->title }}</a>
                <p>{{ $recipe->category->name }}</p>
                <p>{{ $recipe->created_at->format('d.m.Y H:i') }}</p>
            </li>
        @endforeach
    </ul>
@endsection
