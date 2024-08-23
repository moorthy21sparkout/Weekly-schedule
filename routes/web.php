<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WeekController;
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

Route::get('/dashboard', [TeamController::class,'index']

)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/team-create',[TeamController::class,'create'])->name('team-create');
Route::post('/team-store',[TeamController::class,'store'])->name('team-store');
Route::get('/team-edit/{id}',[TeamController::class,'edit'])->name('team-edit');
Route::post('/team-update/{id}',[TeamController::class,'update'])->name('team-update');
Route::delete('/team-destroy{id}',[TeamController::class,'destroy'])->name('team-destroy');

Route::resource('/employee',(EmployeeController::class));



require __DIR__ . '/auth.php';

