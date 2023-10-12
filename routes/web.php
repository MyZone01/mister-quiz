<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\Questions\QuestionController;
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


Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'store']);
Route::resource("login",LoginController::class)->middleware('guest');

Route::resource("register",RegisterController::class)->middleware('guest');
Route::resource("leaderboard",LeaderboardController::class);

Route::group(['middleware'=>['auth']],function (){
    Route::resource("profile",ProfileController::class);
    Route::resource("quiz",QuestionController::class);
});

Route::resource("leaderboard",LeaderboardController::class);
// Route::get('/register', [RegisterController::class, 'index'])->name('register');
// Route::post('/register', [RegisterController::class, 'store']);
// Route::post('/quiz', [RegisterController::class, 'leaderboard']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
