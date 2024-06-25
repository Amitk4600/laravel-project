<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;



Route::view('/', 'welcome',[WelcomeController::class,'index'])->name('home');
// Route::get('/', 'welcome',->name('welcome');

// Other routes...
// add new user
Route::view('newuser', '/adduser')->name('add_new');
Route::post('/add', [AddUserController::class, 'add_Users'])->name('add_user');

// display
Route::get('/display', [AddUserController::class, 'display_User'])->name('displayUser');

// update
Route::view('updateuser', '/update')->name('update_new');
// Route::get('updateuser', function ($id) {
//     $user = DB::table('crud__operation')->find($id);
//     return view('update', compact('user'));
// })->name('update_new');
Route::post('/updateUsrs', [AddUserController::class, 'updateUser'])->name('update_User');

//delete
Route::get('/deleteUsrs/{id}', [AddUserController::class, 'delete_user'])->name('update.User');

// registration
Route::get('/registrationUser', function () {
    return view('pages.registration');
});
Route::post('/register',[RegisterController::class,'registerUser'])->name('register_user');

// Login
Route::get('/loginUser', function () {
    return view('pages.login');
});


Route::get('/loginUser', [LoginController::class, 'showLoginForm'])->name('login.form');



Route::post('/login',[LoginController::class,'loginUsers'])->name('login_user');
//logout
Route::post('/logout',[LogOutController::class,'destroy'])->name('logout_user');

