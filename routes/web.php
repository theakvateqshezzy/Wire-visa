<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\VisaRequestController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('visa-requests', VisaRequestController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/page1', function (){
    return view('page1');
})->name('dashboard');

Route::get('/page2', function (){
    return view('page2');
})->name('create.lead');

Route::get('/ongoing-track', function (){
    return view('ongoing-track');
})->name('track');

Route::get('/visa-completed', function (){
    return view('visa-completed');
})->name('completed');

Route::get('/admin-user', function (){
    return view('admin-user');
})->name('users');

Route::get('/admin-visa', function (){
    return view('admin-visa');
})->name('visas');
require __DIR__.'/auth.php';