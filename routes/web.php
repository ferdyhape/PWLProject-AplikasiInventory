<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('course', function () {
    return view('course');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('about-us', function () { //about langsung ke view
    return view('aboutus');
});

Route::get('/about', [AboutController::class,'tampilabout']); //about menggunakan controller

Route::get('cek', function () {
    return view('cek');
});
Route::get('layout', function () {
    return view('ceklayout');
});

// --- 

Route::post('/home', function () {
    return view('home');
});
Route::post('course', function () {
    return view('course');
});
Route::post('contact', function () {
    return view('contact');
});
Route::post('about-us', function () { //about langsung ke view
    return view('aboutus');
});
Route::post('/about', [AboutController::class,'tampilabout']); //about menggunakan controller

Route::post('cek', function () {
    return view('cek');
});
Route::post('layout', function () {
    return post('ceklayout');
});

