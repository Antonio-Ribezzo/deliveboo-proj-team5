<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RestaurantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\ItemController;

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

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    // Ho spostato la rotta della dashboard all'interno del gruppo gestito dalla middleware creando un controller
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    //rotte per la gestione del profilo
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    // creazione ristorante e/o visualizzazione
    Route::resource('/restaurant', RestaurantController::class);

    // rotta risorsa items
    Route::resource('/items', ItemController::class);

});


require __DIR__ . '/auth.php';
