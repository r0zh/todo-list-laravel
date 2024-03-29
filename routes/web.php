<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServviceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view("/bienvenida", "Bienvenidos");

Route::post("/bienvenida", function(){
    return "Hola mundo, desde POST";
})->name("bienvenidapost");

Route::get("/main", [UsuarioController::class, "main"])->name("main");

Route::get("/usuario/{id?}", [UsuarioController::class, "perfil"])->name("usuario");

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
