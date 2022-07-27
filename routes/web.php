<?php

use App\Http\Pages\Home;
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

Route::get('/', Home::class)->name('home');
Route::get('/contact', Home::class)->name('contact');
Route::get('/resources', Home::class)->name('resources');
Route::get('/marketinflu', Home::class)->name('marketinflu');
Route::get('/universes', Home::class)->name('universes');
Route::get('/catalogs', Home::class)->name('catalogs');
Route::get('/campaigns', Home::class)->name('campaigns');
