@props([
'page_title' => 'Indice de todo esto',
])
@extends('layouts.layout')

@section('content')
    @forelse($posts as $post)
    <h3>{{ $post->title }}</h3>
    <h3>{{ $post->content }}</h3>
    <h3>{{ $post->id }}</h3>

    @empty
        "No hay datos"
    @endforelse
@endsection
