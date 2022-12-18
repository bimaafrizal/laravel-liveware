<?php

use App\Http\Controllers\UserController;
use App\Http\Livewire\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/livewire', function () {
    return view('tutorial');
});
Route::get('/livewire-lifecycle', function () {
    return view('lifecycle');
});
Route::get('/livewire-action', function () {
    return view('action');
});
Route::get('/livewire-crud', function () {
    return view('users.index');
});

//full component yaitu component serta controller dari full dari livewire (tidak direkomendasikan)
Route::get('article/{name}', Article::class)->name('article');

Route::get('users/{id}', [UserController::class, 'show'])->name('users.details');
Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');