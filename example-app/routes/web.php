<?php

use App\Http\Controllers\StagiaireController;
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
Route::get('/stagiaires', [StagiaireController::class, 'index'])->name('index');
// Route to display the form for adding a new stagiaire
Route::get('/stagiaires/create', [StagiaireController::class, 'create'])->name('create');

// Route to handle the form submission and store the new stagiaire
Route::post('/stagiaires', [StagiaireController::class, 'store'])->name('store');

Route::delete('/stagiaires/delete', [StagiaireController::class, 'delete'])->name('delete');
Route::get('/stagiaires/search', [StagiaireController::class, 'search'])->name('search');
Route::get('/stagiaires/{stagiaire}/edit', [StagiaireController::class, 'edit'])->name('edit');
Route::put('/stagiaires/{stagiaire}', [StagiaireController::class, 'update'])->name('update');
Route::delete('/stagiaires/{stagiaire}', [StagiaireController::class, 'destroy'])->name('destroy');



