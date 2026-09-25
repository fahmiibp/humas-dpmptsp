<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ActivityController;

Route::get('/activities', [ActivityController::class, 'index']);

Route::get('/activities/search', [ActivityController::class, 'search']);

Route::get('/activities/filter', [ActivityController::class, 'filter']);