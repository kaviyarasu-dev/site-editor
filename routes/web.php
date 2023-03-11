<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('1234', function(){
    return csrf_token();
});

// Route::controller(HomeController::class)->group(function () {
//     Route::get('{business}', 'editor');
//     Route::get('business/{business}', 'business');
//     Route::post('upload', 'upload');
//     Route::post('save/{business}', 'save');
//     Route::get('public/scan', 'scan');
// });
