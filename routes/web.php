<?php
/*
use App\Models\Post;
use App\Models\Comment;
*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
Route::get('/user/{id}/show', [UserController::class, 'show'])->name('user.show');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::delete('/user/destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/login', [UserController::class, 'login'])->name('user.login');

Route::get('/post/index', [PostController::class, 'index'])->name('index');
Route::get('/post/{id}/show', [PostController::class, 'show'])->name('show');
Route::get('/post/create', [PostController::class, 'create'])->name('create');
Route::post('/post/store', [PostController::class, 'store'])->name('store');
Route::put('/post/{post}', [PostController::class, 'update'])->name('update');
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('edit');
Route::delete('/post/destroy/{post}', [PostController::class, 'destroy'])->name('destroy');
Route::get('/post/alerta/{post}', [PostController::class, 'alerta'])->name('alerta_borrar');
//Route::get('/post/comment/{post}', [PostController::class, 'comment'])->name('comment');

Route::get('/comment/create/{post}', [CommentController::class, 'create'])->name('comment.create');
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');
Route::get('/comment/{comment}/edit', [CommentController::class, 'edit'])->name('comment.edit');
Route::put('/comment/{comment}', [CommentController::class, 'update'])->name('comment.update');
Route::delete('/comment/destroy/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
//Route::resource('post', PostController::class);



/*
Route::get('prueba', function () {
    $codigo = 4;
      Comment::create([
    // 'title' => 'Post ' . $codigo,
    'content' => 'Contenido del Comentario ' . $codigo,
    'post_id' => $codigo,
    ]);
    return 'Comentario ' . $codigo . ' creado';

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
*/