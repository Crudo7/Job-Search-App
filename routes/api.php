<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OfferController;

Route::get('/offer',[OfferController::class,'index'])->name('apihome');
Route::post('/offer',[OfferController::class,'store'])->name('apistore');