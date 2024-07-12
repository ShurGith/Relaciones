@props([
    'imgNoLogin' => '/images/un-login-man.png',
    'imgLogin' => '/images/login-man.png',
])
<div class="px-30 bg-gray-200 flex h-32 w-2/5 flex-col items-end border">
	<div class="w-full flex justify-center">
		<a href="{{ route('login') }}">
			@if (Auth::check())
				<img class="w-12" src="{{ asset($imgNoLogin) }}">
			@else
				<img class="w-12" src="{{ asset($imgNoLogin) }}">
			@endif
		</a>
	</div>
	<ul class="bg-red-200 mb-2 mr-10 mt-4 flex h-full list-none items-end justify-end gap-2">
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
</div>
</div>
