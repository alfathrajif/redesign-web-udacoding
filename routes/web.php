<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaderboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/leaderboard', [LeaderboardController::class, 'index']);
