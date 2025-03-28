<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ChessBoardController;

Route::post('/chessboard/retrieve_colors', [ChessBoardController::class, 'retrieveColors']);