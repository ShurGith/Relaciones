@props([
    'page_title' => 'Indice de todo esto',
    'la_s' => '',
])
@extends('layouts.layout')
@section('content')
	<div class="flex w-5/6 flex-col justify-center">
		<div class="flex pb-4 w-full items-end justify-end">
			@include('components.alert')
		</div>
		@forelse($posts as $post)
			<div class="flex items-center gap-2 py-1 border-b pb-2">
				<div class="w-2/3">
					<a href="{{ route('show', $post->id) }}">{{ $post->title }}</a>
					@if ($post->comments->count() !== 0)
						<span class="text-xs">
							{{ '(' . $post->comments->count() . ' comentario' }}{{ $post->comments->count() > 1 ? 's)' : ')' }}
						</span>
					@endif
				</div>
				<a class="rounded bg-green-500 px-4 py-1 text-white" href="{{ route('comment.create', $post->id) }}">Comentar</a>
				<a class="rounded bg-blue-500 px-4 py-1 text-white" href="{{ route('edit', $post->id) }}">Editar</a>
				<a class="btnBorrar cursor-pointer rounded bg-red-500 px-4 py-1 text-white"
					onclick="funcBtnBorrar(this)">Borrar</a>
				<div class="formulario flex hidden items-center justify-center gap-2">
					<button class="rounded bg-amber-400 px-4 py-1 text-white" onClick="funcBtnDescartar(this)">Descartar</button>
					<form action="{{ route('destroy', $post->id) }}" class="m-0" method="POST">
						@csrf
						@method('DELETE')
						<button class="rounded bg-red-500 px-4 py-1 text-white" type="submit">Confirmar</button>
					</form>
				</div>
			</div>
		@empty
			"No hay datos"
		@endforelse
			<div>
			    {{ $posts->links() }}


			</div>

	</div>

@endsection
<script>
	function funcBtnDescartar(ele) {
		ele.parentElement.previousElementSibling.classList.toggle('hidden')
		ele.parentElement.classList.toggle('hidden')
	}
	function funcBtnBorrar(ele) {
	    const divForms = document.querySelectorAll('.formulario')
	    const btnsBorrar = document.querySelectorAll('.btnBorrar')
	    for(div of divForms)
	     div.classList.add('hidden')
	    for(btn of btnsBorrar)
	     btn.classList.remove('hidden')
		ele.nextElementSibling.classList.toggle('hidden')
		ele.classList.toggle('hidden')
	}
</script>
