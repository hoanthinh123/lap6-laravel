<?php

use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckAuth;
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
Route::get('/user', function () {
    return view('admin.index');
});
//Admin
Route::middleware([Authenticate::class, CheckAuth::class])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('users', [AdminUserController::class, 'index'])->name('admin.users.index');

        Route::get('/users/create', [AdminUserController::class, 'create'])->name('admin.posts.create');

        Route::post('/users/create', [AdminUserController::class, 'store'])->name('admin.users.store');

        Route::get('/users/edit/{post}', [AdminUserController::class, 'edit'])->name('admin.users.edit');

        Route::put('/users/edit/{post}', [AdminUserController::class, 'update'])->name('admin.users.update');

        Route::delete('/users/delete/{post}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
    });
});


//Login, register, logout
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');

Route::get('/register', [AuthController::class, 'getRegister'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');