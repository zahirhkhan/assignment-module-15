<?php

    use App\Http\Controllers\ProfileController;
    use Illuminate\Support\Facades\Route;

    Route::get('/profile/{id}', [ProfileController::class, 'index']);
    Route::get('/', function () {
        return view('welcome');
    });
