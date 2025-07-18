<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PostAPIController;

Route::apiResource('post', PostAPIController::class);
?>
