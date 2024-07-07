@props([
'page_title' => 'Indice de todo esto',
])
@extends('layouts.layout')

@section('content')
<div class="flex w-full justify-center bg-gray-50">

    <div class="flex flex-col gap-3 justify-center">
        @forelse($posts as $post)
        <div class="flex gap-2 items-center">
        <a href="{{ route('show', $post->id) }}">{{ $post->title }}</a>
        <a class="text-bold border bg-green-500 text-white rounded border-gray-300 py-1 px-4" href="{{ route('comment.create', $post->id) }}">Comentar</a>
        <a class="text-bold border bg-blue-500 text-white rounded border-gray-300 py-1 px-4" href="{{ route('edit', $post->id) }}">Editar</a>
        <a class="text-bold border bg-red-500 text-white rounded border-gray-300 py-1 px-4" href="{{ route('destroy', $post->id) }}">Eliminar</a>
        </div>
        @empty
        "No hay datos"
        @endforelse
    </div>
</div>
@endsection
