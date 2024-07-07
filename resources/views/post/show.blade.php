@props([
    'page_title' => 'Mostrando el post',
])
@extends('layouts.layout')
@section('content')
   <div class="flex flex-col">
       <div>{{ $post->title }} <br /></div>
      <div> {{ $post->content }}<br /></div>
       <div>{{ $post->comentarios[0][1] }} <br /></div>
<br /><br />
        <a class="text-red-400 "href="{{ route('edit', $post->id) }}">Editar</a> - {{ $post->title }}
   </div>
@endsection
