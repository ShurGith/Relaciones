<?php

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('prueba', function () {
    $codigo = 4;
    /*  Comment::create([
    // 'title' => 'Post ' . $codigo,
    'content' => 'Contenido del Comentario ' . $codigo,
    'post_id' => $codigo,
    ]);
    return 'Comentario ' . $codigo . ' creado';
     */
    $comentario = Comment::find($codigo);
   // $comentario

    return  $comentario->post;
});

Route::get('prueba',function(){
    $post = Post::find(2);

    return $post->comentarios;

});

Route::get('pub', function(){
    $post = Post::find(2);

    $post->comentarios()->create([
        'content'=>'Creado desde el Navegador',
    ]);
    return 'El Comentario ha sido creado';
});
