<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard'],function () {
    // Route::resource('post', PostController::class);
    // Route::resource('category', CategoryController::class);
    Route::resources(
        [
            'post' => PostController::class,
            'category' => CategoryController::class,
        ]
        );
});



// Route::get('test', [PrimerControlador::class,'index']);
// Route::get('otro/{post}/{otro}', [PrimerControlador::class,'otro']);

// Route::resource('post', PrimerControlador::class);











/* Pruebas iniciales
Route::get('/contact', function () {

    #return redirect('/contact2', 303);
    #return redirect()->route('contact2');
    #return to_route('contact2');

    return view('contact', ['name' => 'David']);
})->name('contact');


Route::get('/contact2', function () {
    return view('contact2');
})->name('contact2');
*/