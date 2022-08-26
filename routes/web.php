<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;

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
    return view('welcome');
});

//frontend route

Route::get('/', [FrontController::class, 'route'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontController::class, 'contact_store'])->name('contact.store');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/reservation', [FrontController::class, 'reservation'])->name('reservation');
Route::post('/reservation', [FrontController::class, 'reservation_store'])->name('reservation.store');
Route::get('/events', [FrontController::class, 'event'])->name('events');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/branches', [FrontController::class, 'branches'])->name('branches');
Route::get('/branches/branch1', [FrontController::class, 'branch1'])->name('branch1');
Route::get('/branches/branch2', [FrontController::class, 'branch2'])->name('branch2');
Route::get('/branches/branch3', [FrontController::class, 'branch3'])->name('branch3');

// Route::get('/reservation' , [App\Http\Controllers\Admin\ReservationController::class, 'store'])->name('reservation.store');
// Route::get('/contact' , [App\Http\Controllers\Admin\ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
        Route::get('/reservation', [App\Http\Controllers\Admin\RouteController::class, 'reservation']);
        Route::get('/contact', [App\Http\Controllers\Admin\RouteController::class, 'contact']);
    });
require __DIR__ . '/auth.php';