<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\general::class, 'about'])->name('about');

Route::get('/solutions', [App\Http\Controllers\general::class, 'solutions'])->name('solutions');
Route::get('/partners', [App\Http\Controllers\general::class, 'partners'])->name('partners');
Route::get('/partners/details', [App\Http\Controllers\general::class, 'partners_details'])->name('partners-details');

Route::get('/hiring', [App\Http\Controllers\general::class, 'hiring'])->name('hiring');
Route::get('/contact', [App\Http\Controllers\general::class, 'contact'])->name('contact');

Route::get('/solutions/display/{id}', [App\Http\Controllers\general::class, 'Sol']);
Route::get('/solutions/security/{id}', [App\Http\Controllers\general::class, 'Security']);