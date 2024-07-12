@props([
    'page_title' => 'Listado de usuarios',
    'la_s' => '',
    'esPar' => 0,
    'paginas' => request()->per_page,
   'selector' => ['pasos' => 5, 'seleccion' => 7, 'metodo' => 'GET'],
    //App::setLocale(Config('locale')), App::setLocale(Config('app.fallback_locale')),
])

@extends('layouts.layout')
@section('content')
	<div class="flex w-5/6 flex-col justify-center">
		<div class="flex w-full items-end justify-end pb-4">
			@include('components.alert')
		</div>
		<!-- Formulario Elementos por Página -->
		<div class="flex w-full justify-end pr-10">
			<form action="{{ route('user.index') }}" method="GET"" >
				<select class="text-base px-4 ml-2 bg-slate-400 text-white cursor-pointer rounded border border-slate-400" name="per_page">
					@for ($i = 5; $i < $selector['seleccion'] * $selector['pasos']; $i += $selector['pasos'])
						<option {{ $paginas == $i ? 'selected  aria-selected=“true”' : '' }} value="{{ $i }}">{{ $i }}</option>
					@endfor
				</select>
				<button class=" px-4 ml-2 bg-slate-400 text-white cursor-pointer rounded border border-slate-400" type="submit">Enviar</button>
			</form>
		</div>
		<!-- Final Formulario Elementos por Página -->
		<!-- Salida de Registros -->
		@forelse($users as $user)
			<?php $esPar++; ?>
			<div class="{{ $esPar % 2 == 0 ? 'bg-slate-100 ' : 'bg-slate-200 ' }}pl-4 flex items-center gap-2 border-b py-1 pb-2">
				<div class="w-full py-2 flex justify-start gap-16 border ">
					<a class="min-w-[200px] border" href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a>
					<a href="mailto:{{ $user->email }}">{{ $user->email }}
					{{-- @if ($user->comments->count() !== 0)
						<span class="text-xs">
							{{ '( ' . $user->comments->count() . 'comentario' }}{{ $user->comments->count() > 1 ? 's)' : ')' }}
						</span>
					@endif --}}
				</div>
				<!-- Botones de Acción -->
				<div class="flex w-full justify-end gap-3 pr-2">
					<a class="rounded bg-blue-500 px-4 py-1 text-white text-xs" href="{{ route('user.edit', $user->id) }}">Editar</a>
					<a class="btnBorrar cursor-pointer rounded bg-red-500 px-4 py-1 text-white text-xs" onclick="funcBtnBorrar(this)">Borrar</a>
		            <!-- Botones Confirmación Ocultos -->
					<div class="formulario flex hidden items-center justify-center gap-2">
						<form action="{{ route('user.destroy', $user->id) }}" class="m-0" method="POST">
							@csrf
							@method('DELETE')
							<button class="rounded bg-red-500 px-4 py-1 text-white text-xs" type="submit">Confirmar</button>
						</form>
						<button class="rounded bg-amber-500 px-4 py-1 text-white text-xs" onClick="funcBtnDescartar(this)">Descartar</button>
					</div>
		            <!-- Fin Botones Confirmación Ocultos -->
				</div>
				<!-- Fin Botones de Acción -->
			</div>
		@empty
			"No hay datos"
		@endforelse
		<!-- Fin Salida de Registros -->

		<!-- Paginación -->
		<div>
			{{ $users->links() }}
		</div>
		<!-- Fin Paginación -->
	</div>
@endsection

