<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

// fontEnd
Route::get('/',[LandingController::class,'home'])->name('home');