<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;

Route::resource('students', studentsController::class);