<?php

use App\Http\Controllers\ManagementUserController;

//Route::get('/', [ManagementUserController::class, 'index']);
Route::resource('user', ManagementUserController::class);