@props([
'page_title' => '🛫 ' . $post->title,
])

@extends('layouts.layout')
@section('content')
<div class="flex flex-col w-4/5 items-center">
    <!-- BOTON EDITAR -->
    <div class="flex w-full justify-end py-4 gap-2">
        <a class="text-xs rounded bg-blue-500 px-4 py-2 text-white" href="{{ route('edit', $post->id) }}">Editar</a>
        <a class="btnBorrar text-xs rounded bg-red-500 px-4 py-2 text-white" onclick="funcBtnBorrar(this)">Borrar</a>
		            <!-- Botones Confirmación Ocultos -->
					<div class="formulario hidden flex items-center justify-center gap-2">
						<form action="{{ route('destroy', $post->id) }}" class="m-0" method="POST">
							@csrf
							@method('DELETE')
							<button class="text-xs rounded bg-red-500 px-4 py-2 text-white" type="submit">Confirmar</button>
						</form>
						<button class="text-xs rounded bg-amber-500 px-4 py-2 text-white" onClick="funcBtnDescartar(this)">Descartar</button>
					</div>
    </div>
    <!-- INICIO DEL POST EN TEXTO -->
    <div class="my-10 w-10/12 flex justify-start">
        {{ $post->content }}
    </div>
    <!-- INICIO TABLA DE COMENTARIOS -->
    <div class="w-full  text-gray-600">
    @if ($post->comments->count() !== 0)
        <div class="flex w-4/5 gap-1">
            <h3 class="ml-4 pl-12 text-md  underline underline-offset-8">{{ __('actions.comments') }}</h3>
            <span class="text-xs">({{ $post->comments->count() }})</span>
        </div>
        <!-- INICIO DEL COMENTARIO EN TEXTO -->
        @foreach ($post->comments as $comment)
        <div class="border-b border-gray-200 py-4">
           <p class="text-sm"> {{ $comment->content }}</p>
            <p class="mt-2 text-xs">{{ $comment->created_at->translatedFormat('D, d-M-Y') }}</p>
            <!-- BOTONES DE MANIOBRA -->
            <div class="flex items-center  gap-3 mt-4">
                <a href="{{ route('comment.edit', $comment->id) }}">
                    <svg aria-hidden="true" fill="#0000ff" height="24" id="Pencil-Square--Streamline-Heroicons" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.8672 1.1328C21.6765 -0.0576 19.7463 -0.0576 18.5557 1.1328L17.2118 2.4767L21.5233 6.7882L22.8672 5.4443C24.0576 4.2537 24.0576 2.3235 22.8672 1.1328ZM20.291 8.0205L15.9795 3.709L6.2229 13.4656C5.5061 14.1821 4.9791 15.0659 4.6897 16.0372L3.7605 19.1558C3.5689 19.7985 4.1449 20.4075 4.7972 20.2521C4.813 20.2483 4.8286 20.2441 4.8442 20.2395L7.9628 19.3103C8.9341 19.0209 9.8179 18.4939 10.5344 17.7771L20.291 8.0205Z" stroke-width="1"></path>
                        <path d="M3.7245 4.5953C1.8001 4.5953 0.24 6.1553 0.24 8.0798V20.2755C0.24 22.2 1.8 23.7601 3.7245 23.76H15.9202C17.8446 23.7599 19.4047 22.1999 19.4047 20.2755V14.1776C19.4047 13.507 18.6788 13.0879 18.098 13.4232C17.8285 13.5788 17.6625 13.8664 17.6625 14.1776V20.2755C17.6625 21.2377 16.8824 22.0177 15.9202 22.0178H3.7245C2.7622 22.0178 1.9822 21.2377 1.9822 20.2755V8.0798C1.9822 7.1175 2.7622 6.3375 3.7245 6.3375H9.8224C10.493 6.3375 10.9121 5.6115 10.5768 5.0308C10.4212 4.7613 10.1336 4.5953 9.8224 4.5953H3.7245Z" stroke-width="1"></path>
                    </svg>
                </a>
                <button type="button" class="btnAcc" onclick="(this.nextElementSibling.classList.toggle('hidden'))">
                    <svg aria-hidden="true" fill="#ff0000" height="24" id="Trash--Streamline-Heroicons" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" d="M17.0401 3.5753V3.8295C18.4949 3.9626 19.9439 4.1539 21.3834 4.403C22.0206 4.5133 22.2993 5.2721 21.8852 5.7687C21.693 5.9991 21.3924 6.1096 21.0967 6.0583L20.8626 6.0191L19.737 20.6576C19.6024 22.4081 18.1428 23.7599 16.3871 23.76H7.6141C5.8584 23.7599 4.3988 22.4081 4.2642 20.6576L3.1375 6.0192L2.9034 6.0584C2.2663 6.1687 1.7486 5.548 1.9716 4.941C2.0751 4.6593 2.321 4.4542 2.6167 4.403C4.0562 4.1536 5.5051 3.9623 6.96 3.8295V3.5753C6.96 1.8236 8.3186 0.3273 10.114 0.2702C11.3714 0.2299 12.6298 0.2299 13.8873 0.2702C15.6826 0.3273 17.0401 1.8236 17.0401 3.5753ZM10.1677 1.9491C11.3894 1.91 12.6119 1.91 13.8335 1.9491C14.6769 1.9759 15.3601 2.686 15.3601 3.5753V3.7019C13.1221 3.566 10.878 3.566 8.64 3.7019V3.5753C8.64 2.686 9.3221 1.9759 10.1677 1.9491ZM9.7701 8.6075C9.7451 7.9609 9.0295 7.5838 8.482 7.9287C8.2279 8.0888 8.0785 8.3723 8.0901 8.6724L8.4788 18.7525C8.5038 19.3987 9.2189 19.7755 9.7661 19.4307C10.02 19.2707 10.1693 18.9874 10.1577 18.6875L9.7701 8.6075ZM15.9078 8.6724C15.9549 8.0275 15.2862 7.5735 14.7041 7.8551C14.4154 7.9948 14.2314 8.2868 14.23 8.6075L13.8414 18.6875C13.8164 19.3341 14.5007 19.7654 15.0732 19.4637C15.3389 19.3237 15.5098 19.0526 15.5214 18.7525L15.9078 8.6724Z" fill-rule="evenodd" stroke-width="1">
                        </path>
                    </svg>
                </button>
                <div class="hidden flex gap-2">
                <button class="bg-gray-400 text-white text-xs px-4 rounded-md" onclick="(this.parentElement.classList.toggle('hidden'))">Descartar</button>
                <form action="{{ route('comment.destroy', $comment->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white text-xs px-4 py-2 rounded-md " type="submit">Elininar</button>
                </form>
            </div>
            </div>
        </div>
        @endforeach
        @else
        <h3 class="text-sm underline underline-offset-4">Este post no tiene comentarios</h3>
    </div>
    @endif
</div>
@endsection
