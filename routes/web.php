<?php

use App\Http\Controllers\UserController;
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
Route::get('/livewire-action', function () {
    return view('action');
});
Route::get('/livewire-crud', function () {
    return view('users.index');
});


Route::get('users/{id}', [UserController::class, 'show'])->name('users.details');