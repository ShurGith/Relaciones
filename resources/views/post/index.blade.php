@props([
'page_title' => 'Indice de todo esto',
'la_s' => ''
])
@extends('layouts.layout')

@section('content')
<div class="flex flex-col w-5/6 justify-center bg-gray-50">
        @forelse($posts as $post)
        <div class="flex gap-2 items-center">
            <div class="w-2/3">
                <a href="{{ route('show', $post->id) }}">{{ $post->title }}</a>
                @if($post->comentarios->count() > 0)
                <span class="text-xs ">
                    {{ '('. $post->comentarios->count().' comentario'}}{{ ($post->comentarios->count() > 1)? 's)' :')'}}
                </span>
                @endif
            </div>
            <a class="text-bold border bg-green-500 text-white rounded border-gray-300 py-1 px-4" href="{{ route('comment.create', $post->id) }}">Comentar</a>
            <a class="text-bold border bg-blue-500 text-white rounded border-gray-300 py-1 px-4" href="{{ route('edit', $post->id) }}">Editar</a>
            <a class="text-bold border bg-red-500 text-white rounded border-gray-300 py-1 px-4" href="{{ route('destroy', $post->id) }}">Eliminar</a>
        </div>
        @empty
        "No hay datos"
        @endforelse
</div>
@endsection
