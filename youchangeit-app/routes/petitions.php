<?php
use App\Http\Controllers\PetitionController;
use Illuminate\Support\Facades\Route;

Route::resource('/petitions', PetitionController::class);