<!-- resources/views/recipes/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $recipe->title }}</h1>
    <p>{{ $recipe->text }}</p>
    <p>Лоты {{ $recipe->category->name }}</p>
    <p>Создать лот {{ $recipe->created_at->format('d.m.Y H:i') }}</p>
@endsection
