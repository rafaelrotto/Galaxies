<?php

use App\Http\Controllers\GalaxyController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function () {
    return view('auth/login');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

    Route::group(['prefix' => 'galaxy'], function () {
        Route::post('/create/{id}', [GalaxyController::class, 'store'])->name('galaxy.create');
        //Route::get('/edit/{id_paciente}', [GalaxyController::class, 'edit'])->name('paciente.edit');
        //Route::put('/update/{id_paciente}', [GalaxyController::class, 'update']);
        //Route::get('/search', [GalaxyController::class, 'index']);

        //Route::get('/show', [GalaxyController::class, 'index']);
        Route::get('/create', [GalaxyController::class, 'create'])->name('galaxy.index');
    });

    Route::get('/logout', [LogoutController::class, 'logout']);
});