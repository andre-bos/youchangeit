<?php
use App\Http\Controllers\DecMakerController;
use Illuminate\Support\Facades\Route;

Route::resource('/decmakers', DecmakerController::class);