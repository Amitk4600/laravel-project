<?php

use App\Http\Controllers\AddUserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

Route::view('/', 'welcome')->name('home');
Route::view('newuser', '/adduser')->name('add_new');
Route::post('/add', [AddUserController::class, 'add_Users'])->name('add_user');
Route::get('/display', [AddUserController::class, 'displayUser'])->name('displayUser');
Route::view('updateuser', '/update')->name('update_new');
Route::get('updateuser/{id}', function ($id) {
    $user = DB::table('crud__operation')->find($id);
    return view('update', compact('user'));
})->name('update_new');
Route::post('/updateUsrs', [AddUserController::class, 'updateUser'])->name('update_User');
Route::get('/deleteUsrs/{id}', [AddUserController::class, 'delete_user'])->name('update.User');
