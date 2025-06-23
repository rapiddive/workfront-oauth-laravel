<?php

use App\Http\Controllers\WorkfrontAuthController;
use App\Http\Controllers\WorkfrontFormController;
use App\Http\Livewire\Login;
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


//Route::get('/', Index::class);
//Route::get('index', Index::class);

Route::get('login', Login::class)->name('login');

Route::get('/oauth/redirect', [WorkfrontAuthController::class, 'redirectToProvider'])->name('oauth.redirect');
Route::get('/oauth/callback', [WorkfrontAuthController::class, 'handleCallback'])->name('oauth.callback');
Route::get('/oauth/refresh', [WorkfrontAuthController::class, 'refreshAccessToken'])->name('oauth.refresh');

Route::middleware(['workfront.token'])->group(function () {
//    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/request', [WorkfrontFormController::class, 'showForm'])->name('workfront.form');
        Route::post('/request', [WorkfrontFormController::class, 'submitForm'])->name('workfront.submit');
//    });
});
