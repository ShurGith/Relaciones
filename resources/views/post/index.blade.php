@props([
'page_title' => 'Indice de todo esto',
])
@extends('layouts.layout')

@section('content')
<div class="flex w-full justify-center bg-gray-50">

    <div class="flex w-3/4 flex-col justify-center">
        @forelse($posts as $post)
        <a class="text-bold border-b-2 border-gray-300 py-4 pl-5" href="{{ route('edit', $post->id) }}">{{ $post->title }}</a>
        @empty
        "No hay datos"
        @endforelse
    </div>
</div>
@endsection
