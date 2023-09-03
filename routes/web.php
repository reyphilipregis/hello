<?php

use App\Models\Message;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
   echo 'This is a test display from /test route';
});

Route::get('/test2', function () {
    echo 'This is a test display from /test2 route';
});

Route::get('/test3', function () {
    echo 'This is a test display from /test3 route';
});

Route::get('/test4', function () {
    echo 'This is a test display from /test4 route';
});

Route::get('/test5', function () {
    echo 'This is a test display from /test5 route';
});

Route::get('/test6', function () {
    echo 'This is a test display from /test6 route';
});

Route::get('/sample', function () {
    echo 'This is a sample route';
});

Route::get('/messages', function () {
    return Message::all();
});
