@props([
'page_title' => 'Página de Logeo',
'la_s' => '',
])
@extends('layouts.layout')
@section('content')
<div class="w-full h-screen flex items-center justify-center bg-emerald-200">
    <form class="w-full md:w-1/3 rounded-lg">
        <div class="flex font-bold justify-center mt-6">
            <img class="h-20 w-20 mb-3" src="{{ asset('images/laravelico.png') }}"" />
        </div>
        <h2 class=" text-3xl text-center text-gray-500 mb-8">Login</h2>
            <div class="px-12 pb-10">
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="text" placeholder="Email Address"
                        class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none " />
                    </div>
                </div>
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="password" placeholder="Password"
                        class="w-full  border rounded px-3 py-2 text-gray-700 focus:outline-none " />
                    </div>
                </div>
                <button type="submit"
                class="w-full py-2 mt-8 rounded-full bg-blue-400 text-gray-100 focus:outline-none">
                    Login
                </button>
            </div>
    </form>
</div>
@endsection
