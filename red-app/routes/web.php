<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsuarioController;
use \App\Http\Controllers\PublicacionController;
use \App\Http\Controllers\ComentarioController;

Route::get('/', [PublicacionController::class, 'list'])->name('publicaciones');

Route::get('/list-users', [UsuarioController::class, 'list'])->name('usuarios');
Route::post('/nuevo-usuario', [UsuarioController::class, 'create'])->name('addUser');
Route::post('/editar-usuario', [UsuarioController::class, 'update'])->name('editUser');
Route::get('/eliminiar-usuario/{id}', [UsuarioController::class, 'delete'])->name('user.delete');

Route::get('/list-publicaciones', [PublicacionController::class, 'list'])->name('publicaciones');
Route::post('/nueva-publicacion', [PublicacionController::class, 'create'])->name('nuevaPublicacion');
Route::post('/editar-publicacion', [PublicacionController::class, 'update'])->name('editarPublicacion');
Route::get('/eliminar-publicacion/{id}', [PublicacionController::class, 'delete'])->name('eliminarPublicacion');

Route::post('/enviar-comentario', [ComentarioController::class, 'create'])->name('enviarComentario');

Route::get('/list-comentarios/{id}',
    [ComentarioController::class, 'comentariosPorPublicacion'])
    ->name('comentarios');
