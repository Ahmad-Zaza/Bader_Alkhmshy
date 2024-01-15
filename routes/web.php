<?php

use App\Http\Controllers\Website\HomePage\HomePageController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', [HomePageController::class, 'index'])->name('home.index');
Route::post('/send-request', [HomePageController::class, 'sendRequest'])->name('contact.send');

Route::get('clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
});
