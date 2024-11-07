<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
route::get('posts',[PostsController::class, 'index']);
//Mostrar formulario
Route::get('/posts/create',[PostsController::class, 'create']);
//Mostrar post con su categoria
Route::get('/posts/{post}/{category?}',[PostsController::class, 'show']);
Route::get('posts/{post}/{category?}',function($post, $category = null){
    if($category){
        return "Aquí se mostrará el post {$post} de la categoría {$category}";
    }
    return "Aquí se mostrará el post {$post}";
});
Route::get('/posts/create', function () {
    return 'Aquí se mostraraá el formulario para crear un nuevo post'; 
});
