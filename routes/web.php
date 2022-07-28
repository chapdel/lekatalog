<?php

use App\Http\Pages\Campaigns;
use App\Http\Pages\Contact;
use App\Http\Pages\Home;
use App\Http\Pages\Marketinflu;
use App\Http\Pages\Resource\Browse;
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
Route::get('/contact', Contact::class)->name('contact');
Route::get('/resources', Browse::class)->name('resources');
Route::get('/marketinflu', Marketinflu::class)->name('marketinflu');
Route::get('/universes', Home::class)->name('universes');
Route::get('/catalogs', Home::class)->name('catalogs');
Route::get('/campaigns', Campaigns::class)->name('campaigns');
