<?php

use Illuminate\Support\Facades\Route;

// Redirect root to /api
Route::redirect('/', '/api', 301);
