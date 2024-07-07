@props([
'page_title' => 'Editando: 🖥 '.$comment->id,
])

@extends('layouts.layout')
@section('content')
<form action="{{ route('comment.update', $comment->id) }}" class="mt-20 flex w-full justify-center" method="post">
    @csrf
    @method('put')
    <div class="w-1/2">
        <div class="flex flex-col gap-2 pb-6">
            <label class="relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600" for="contenido">
                <input class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" id="content" name="content" type="text" value="{{ $comment->content }}" />
                <span class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs">
                    Contenido
                </span>
            </label>
        </div>
        <div class="flex justify-center">
            <input class="cursor-pointer inline-block shrink-0 rounded-md border
            border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white
            transition hover:bg-transparent hover:text-blue-600 focus:outline-none
            focus:ring active:text-blue-500" type="submit" value="Enviar">
        </div>
    </div>
</form>
@endsection
