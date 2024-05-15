<?php
use App\Http\Controllers\PetitionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PetitionController::class, 'index']);
Route::get('/detail/{id}', [PetitionController::class, 'show']);

Route::get('/create/step-one', [PetitionController::class, 'createStepOne'])->name('petitions.create.step.one');
Route::post('/create/step-one', [PetitionController::class, 'postCreateStepOne'])->name('petitions.create.step.one.post');

Route::get('/create/step-one-bis', [PetitionController::class, 'createStepOneBis'])->name('petitions.create.step.one.bis');
Route::post('/create/step-one-bis', [PetitionController::class, 'postCreateStepOneBis'])->name('petitions.create.step.one.bis.post');

Route::get('/create/step-two', [PetitionController::class, 'createStepTwo'])->name('petitions.create.step.two');
Route::post('/create/step-two', [PetitionController::class, 'postCreateStepTwo'])->name('petitions.create.step.two.post');

Route::get('/create/step-three', [PetitionController::class, 'createStepThree'])->name('petitions.create.step.three');
Route::post('/create/step-three', [PetitionController::class, 'postCreateStepThree'])->name('petitions.create.step.three.post');