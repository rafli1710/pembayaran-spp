<?php

use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpOption\Option;

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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
    Route::resource('kelas',KelasController::class);
});
