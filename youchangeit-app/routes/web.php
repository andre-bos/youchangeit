<?php

use App\Http\Controllers\PetitionController;
use App\Http\Controllers\ProfileController;
use App\Models\Petition;
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
    $petitions = Petition::with('user', 'category', 'decMaker')->take(5)->get(); // Prendo solo le prime 5 petizioni e vi associo i relativi utenti e le relative categorie sfruttando le relazioni che ho definito nei models 
    return view('home', ['petitions' => $petitions]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
