@props([
'page_title' => 'CREAR UN NUEVO POST'
])
@extends('layouts.layout')

@section('content')

<form action="{{ route('store') }}" method="POST" >
    @csrf
    {{-- @method('put') --}}
    <label for="title">Titulo</label>
    <input type="text" name="title" id="title" placeholder="El titulo aqui">
    <label for="content">Contenido</label>
    <input type="text" name="content" id="content" placeholder="El contenido aqui">
    <input class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none
    hover:bg-indigo-600 rounded text-lg" type="submit" value="Enviar">
</form>

@endsection
