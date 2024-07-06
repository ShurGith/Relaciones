@props('[
'page_title' => 'Mostrando el post',
]')
@extends('layouts.layout')
@section('content')

    @foreach ($posts as $post)
        <a href="{{ route('edit', $post->id) }}">Editar</a> - {{ $post->title }}
    @endforeach
@endsection
