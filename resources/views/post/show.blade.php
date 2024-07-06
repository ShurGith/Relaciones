@props([
    'page_title' => 'Mostrando el post',
])
@extends('layouts.layout')
@section('content')
adfasdfdsa
        <a href="{{ route('edit', $post->id) }}">Editar</a> - {{ $post->title }}
@endsection
