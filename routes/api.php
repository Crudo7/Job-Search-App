<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\UpdatesController;

Route::get('/offer',[OfferController::class,'index'])->name('apihome');
Route::post('/offer',[OfferController::class,'store'])->name('apistore');
Route::delete('/offer/{id}',[OfferController::class,'destroy'])->name('apidestroy');
Route::put('/offer/{id}',[OfferController::class,'update'])->name('apidestroy');
Route::get('/offer/{id}',[OfferController::class, 'show'])->name('apishow');

Route::post('/offer/{offerId}/updates',[UpdatesController::class,'store'])->name('apistoreUpdates');
Route::get('/offer/{offerId}/updates',[UpdatesController::class,'index'])->name('apihomeUpdates');
