<?php

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

Route::get('/cache-clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return Redirect::back()->with('success', 'All cache cleared successfully.');
});

Route::get('/signup', [App\Http\Controllers\LandingController::class, 'register'])->name('signup');
Route::get('/signin', [App\Http\Controllers\LandingController::class, 'signIn'])->name('signin');


Route::get('/', function () {
    return view('home');
})->middleware('guest');
