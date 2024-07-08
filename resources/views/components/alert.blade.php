{{-- Message --}}

@if (Session::has('success'))
	<div class="flex w-1/2 flex-col items-center justify-center gap-2 rounded-b-lg bg-lime-200 py-4">
		<h2 class="font-bold">Se ha realizado la operación de eliminado correctamente</h2> {{-- session('success') --}}
		<button class="flex flex-col items-center justify-center font-bold" onClick="window.location.reload();">Aceptar
		<svg class="icon icon-tabler icons-tabler-outline icon-tabler-thumb-up" fill="none" height="36"
			stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" stroke="#0b77ea" viewBox="0 0 24 24" width="36"
			xmlns="http://www.w3.org/2000/svg">
			<path d="M0 0h24v24H0z" fill="none" stroke="none" />
			<path
				d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
		</svg>
    </button>
	</div>
@endif
