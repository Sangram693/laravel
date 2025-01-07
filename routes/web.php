<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerComplaintController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/customer', function () {
    return view('customer');
});

Route::resource('/customerComplaints', CustomerComplaintController::class);