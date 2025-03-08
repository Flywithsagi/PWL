<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
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

// Menambahkan route baru
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/world', function () {
    return 'World';
});

// Route::get('/', function () {
//     return 'Selamat Datang ';
// });

// Route::get('/about', function () {
//     return '2341720219  Satrio Wisnu Adi Pratama';
// });

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/articles/{id}', function ($id) {
//     return 'Halamanan Artikel dengan ID  '.$id;
// });

Route::get('/user/{name?}', function ($name='satrio') {
    return 'Nama saya '.$name;
});

Route::get('/', [PageController::class,'index']);
Route::get('about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);