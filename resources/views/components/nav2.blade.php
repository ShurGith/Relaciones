@props([
    'imgNoLogin' => '/images/un-login-man.png',
    'imgLogin' => '/images/login-man.png',
])
<div class="px-30 flex h-32 items-center justify-between bg-gray
				<a href="{{ route('user.login') }}">
					@if (Auth::check())
						<img class="mr-4 mt-2 w-12" src="{{ asset($imgNoLogin) }}">
					@else
						<img class="mr-4 mt-2 w-12" src="{{ asset($imgNoLogin) }}">
					@endif
				</a>
				<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
					<ul class="mb-2 mr-10 mt-4 flex h-full list-none items-end justify-end gap-2">
						<li><a
								class="text-md rounded rounded-md border-0 border-2 border-blue-900 px-3 py-1 text-black hover:bg-indigo-600 hover:text-white"
								href="{{ route('index') }}">Inicio</a></li>
						<li><a
								class="text-md rounded rounded-md border-0 border-2 border-blue-900 px-3 py-1 text-black hover:bg-indigo-600 hover:text-white"
								href="{{ route('create') }}">Nuevo Post</a></li>
						<li><a
								class="text-md rounded rounded-md border-0 border-2 border-blue-900 px-3 py-1 text-black hover:bg-indigo-600 hover:text-white"
								href="{{ route('user.index') }}">Users</a></li>
					</ul>
				</nav>
			</div>
		</div>
