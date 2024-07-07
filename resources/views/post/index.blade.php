@props([
'page_title' => 'Indice de todo esto',
'la_s' => ''
])
@extends('layouts.layout')
@section('content')
<div class="flex flex-col w-5/6 justify-center bg-gray-50">
    <div class="w-full justify-center items-center">
    @include('components.alert')
    </div>
        @forelse($posts as $post)
        <div class="flex gap-2 items-center">
            <div class="w-2/3">
                <a href="{{ route('show', $post->id) }}">{{ $post->title }}</a>
                @if($post->comentarios->count() > 0)
                <span class="text-xs ">
                    {{ '('. $post->comentarios->count().' comentario'}}{{ ($post->comentarios->count() > 1)? 's)' :')'}}
                </span>
                @endif
            </div>
            <a class="text-bold border bg-green-500 text-white rounded border-gray-300 py-1 px-4" href="{{ route('comment.create', $post->id) }}">Comentar</a>
            <a class="text-bold border bg-blue-500 text-white rounded border-gray-300 py-1 px-4" href="{{ route('edit', $post->id) }}">Editar</a>
            <a class="text-bold border bg-red-500 text-white rounded border-gray-300 py-1 px-4" href="{{ route('alerta_borrar', $post->id) }}">Borrar</a>



            {{-- <form class="mt-2" action="{{ route('destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">
                    <svg aria-hidden="true" fill="	#ff2200" height="24" id="Trash--Streamline-Heroicons" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" d="M17.0401 3.5753V3.8295C18.4949 3.9626 19.9439 4.1539 21.3834 4.403C22.0206 4.5133 22.2993 5.2721 21.8852 5.7687C21.693 5.9991 21.3924 6.1096 21.0967 6.0583L20.8626 6.0191L19.737 20.6576C19.6024 22.4081 18.1428 23.7599 16.3871 23.76H7.6141C5.8584 23.7599 4.3988 22.4081 4.2642 20.6576L3.1375 6.0192L2.9034 6.0584C2.2663 6.1687 1.7486 5.548 1.9716 4.941C2.0751 4.6593 2.321 4.4542 2.6167 4.403C4.0562 4.1536 5.5051 3.9623 6.96 3.8295V3.5753C6.96 1.8236 8.3186 0.3273 10.114 0.2702C11.3714 0.2299 12.6298 0.2299 13.8873 0.2702C15.6826 0.3273 17.0401 1.8236 17.0401 3.5753ZM10.1677 1.9491C11.3894 1.91 12.6119 1.91 13.8335 1.9491C14.6769 1.9759 15.3601 2.686 15.3601 3.5753V3.7019C13.1221 3.566 10.878 3.566 8.64 3.7019V3.5753C8.64 2.686 9.3221 1.9759 10.1677 1.9491ZM9.7701 8.6075C9.7451 7.9609 9.0295 7.5838 8.482 7.9287C8.2279 8.0888 8.0785 8.3723 8.0901 8.6724L8.4788 18.7525C8.5038 19.3987 9.2189 19.7755 9.7661 19.4307C10.02 19.2707 10.1693 18.9874 10.1577 18.6875L9.7701 8.6075ZM15.9078 8.6724C15.9549 8.0275 15.2862 7.5735 14.7041 7.8551C14.4154 7.9948 14.2314 8.2868 14.23 8.6075L13.8414 18.6875C13.8164 19.3341 14.5007 19.7654 15.0732 19.4637C15.3389 19.3237 15.5098 19.0526 15.5214 18.7525L15.9078 8.6724Z" fill-rule="evenodd" stroke-width="1">
                        </path>
                    </svg>
                </button>
            </form> --}}



        </div>
        @empty
        "No hay datos"
        @endforelse
</div>
@endsection
