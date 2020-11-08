<?php

use App\Http\Livewire\{Dashboards, Users, Botsfs, Botteknisis, Userbots, Categories};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware g`roup. Now create something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    Route::get('/', Dashboards\Index::class)->name('dashboards.index');
    Route::get('/botsfs', Botsfs\Index::class)->name('botsfs.index');
    Route::get('/botteknisis', Botteknisis\Index::class)->name('botteknisis.index');
    Route::get('/userbots', Userbots\Index::class)->name('userbots.index');
    Route::get('/categories', Categories\Index::class)->name('categories.index');
    Route::get('/users', Users\Index::class)->name('users.index');
});
