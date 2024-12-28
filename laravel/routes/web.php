<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'home_index']);
Route::post('/s3-upload-storage', [S3Controller::class, 's3_upload_storage']);