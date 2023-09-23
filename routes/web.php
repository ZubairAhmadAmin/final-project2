<?php

use App\Http\Controllers\CustomAuthController;
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


// Route::get('navbar', function () {
//     return view('Navbar');
// });
Route::get('/', function () {
    return view('Index');
});
Route::get('hotels', function () {
    return view('hotels');
});
Route::get('hotel', function () {
    return view('myHotel');
});
// Route::get('register', function () {
//     return view('auth.register');
// });
// Route::get('login', function () {
//     return view('Login');
// });
// Route::get('register', function () {
//     return view('Register');
// });
Route::get('/login', [CustomAuthController::class, 'login']) ->middleware('alreadyLoggedIn');
Route::get('/register', [CustomAuthController::class, 'registration']) ->middleware('alreadyLoggedIn');
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [CustomAuthController::class, 'Dashboard'])->middleware('isLoggedIn');
// // Route::post('/save', [UserController::class, 'save']);