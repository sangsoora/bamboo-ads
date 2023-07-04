<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClickController;
use App\Http\Controllers\ContactController;

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

Route::domain('organize.' . env('APP_URL'))->group(function () {
    Route::view('/', 'organize')->name('organize');
});

Route::domain('share.' . env('APP_URL'))->group(function () {
    Route::view('/', 'share')->name('share');
});

Route::domain('therapist.' . env('APP_URL'))->group(function () {
    Route::view('/', 'therapist')->name('therapist');
});

Route::domain('resource.' . env('APP_URL'))->group(function () {
    Route::view('/', 'resource')->name('resource');
});

Route::post('contact/store', [ContactController::class, 'store'])
    ->name('contact.store');

Route::post('click/count_clicks', [ClickController::class, 'countClicks'])
    ->name('click.count');


