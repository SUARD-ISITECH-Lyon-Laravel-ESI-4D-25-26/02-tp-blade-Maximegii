<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Routes Web
|--------------------------------------------------------------------------
|
| Enregistrez ici les routes web de votre application. Ces routes sont
| chargées par le RouteServiceProvider dans un groupe qui contient le
| middleware "web". Créez quelque chose de grand !
|
*/

Route::view('/', 'dashboard')->name('dashboard');

Route::get('/users', [HomeController::class, 'users'])->name('users');
Route::get('/alert', [HomeController::class, 'alert'])->name('alert');
Route::get('/table', [HomeController::class, 'table'])->name('table');
Route::get('/rows', [HomeController::class, 'rows'])->name('rows');
Route::view('/authenticated', 'authenticated')->name('authenticated');
Route::get('/include', [HomeController::class, 'include'])->name('include');
Route::view('/layout', 'layout')->name('layout');

require __DIR__.'/auth.php';
