@props('[
    'page_title' => 'Editando el post',
]')
@extends('layouts.layout')
@section('content')

<form action="{{ route('update', $post->id) }}" method="post">
    @csrf
    @method('put')
    <label for="title">Contenido</label>
    <input type="text" name="title" id="title" placeholder="El titulo aqui">
    <label for="content">Contenido</label>
    <input type="text" name="content" id="content" placeholder="El contenido aqui">
    <input type="submit" value="Enviar">
</form>
