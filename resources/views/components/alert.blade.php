{{-- Message --}}

@if (Session::has('alerta'))
	<div class="flex flex-row justify-end items-center" role="alert">
		<strong>¿Seguro que quieres eliminar este Post?</strong> {{-- session('alerta') --}}
		<svg onClick="window.location.reload();" class="cursor-pointer icon icon-tabler icons-tabler-outline icon-tabler-circle-x" fill="none" height="36"
			stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="#0b38ea" viewBox="0 0 24 24" width="36"
			xmlns="http://www.w3.org/2000/svg">
			<path d="M0 0h24v24H0z" fill="none" stroke="none" />
			<path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
			<path d="M10 10l4 4m0 -4l-4 4" />
		</svg>
		<form action="{{ route('destroy', session('alerta')) }}" class="mt-2" method="POST">
			@csrf
			@method('DELETE')
			<button type="submit">
				<svg class="icon icon-tabler icons-tabler-outline icon-tabler-trash" fill="none" height="36"
					stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="#ea0b0b" viewBox="0 0 24 24" width="36"
					xmlns="http://www.w3.org/2000/svg">
					<path d="M0 0h24v24H0z" fill="none" stroke="none" />
					<path d="M4 7l16 0" />
					<path d="M10 11l0 6" />
					<path d="M14 11l0 6" />
					<path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
					<path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
				</svg>
			</button>
		</form>

	</div>
@endif
