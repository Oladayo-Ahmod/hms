<?php

use App\Mail\ContactMail;
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

Route::get('/check', function () {
    return view('check');
});
Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
// Route::view('URI', 'check');
// Route::view('check', 'check');
// fallback
Route::fallback(function(){
    return 'requested page not found';
});
Route::get('/email', function ($id) {
    return new ContactMail();
});