<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiaryController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('beneficiaries', BeneficiaryController::class);
