<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlgestionmobile;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/home', [controlgestionmobile::class, 'savepost'])->name('save.add');

Route::post('/recherche', [controlgestionmobile::class, 'recherche'])->name('recherche');

Route::get('/affiche-post', [controlgestionmobile::class, 'affichepost'])->name('affiche.post');

Route::get('/edit-post/{id}', [controlgestionmobile::class, 'editpost'])->name('post.edit');

Route::get('/vue-post/{id}', [controlgestionmobile::class, 'vuepost'])->name('vue');


Route::get('/delete-post/{id}', [controlgestionmobile::class, 'deletepost'])->name('delete.post');

Route::patch('/update-post/{id}', [controlgestionmobile::class, 'updatepost'])->name('update.post');
