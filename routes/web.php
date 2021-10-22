<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    RaizesController,
    SiteController,
    BlogController,
    ClinicaController,
    ContatoController,
    LinkController,
    LojaController,
    PalestrasController,
    VideosController,
    CursosController,
    PostController,
};

Route::resource('posts', PostController::class);
Route::resource('curso', CursosController::class);
Route::resource('videos', VideosController::class);
Route::resource('palestras', PalestrasController::class);
Route::resource('loja', LojaController::class);
Route::resource('links', LinkController::class);
Route::resource('contato', ContatoController::class);
Route::resource('clinica', ClinicaController::class);
Route::resource('blog', BlogController::class);
Route::resource('site', SiteController::class);
Route::resource('raizes_da_infancia', RaizesController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
