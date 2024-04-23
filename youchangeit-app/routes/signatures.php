<?php
use App\Http\Controllers\SignatureController;
use Illuminate\Support\Facades\Route;

Route::resource('/signatures', SignatureController::class);