<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/features', [WebsiteController::class, 'features'])->name('features');
Route::get('/how-it-works', [WebsiteController::class, 'howItWorks'])->name('how-it-works');
Route::get('/pricing', [WebsiteController::class, 'pricing'])->name('pricing');
Route::get('/download', [WebsiteController::class, 'download'])->name('download');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');

Route::post('/contact', [WebsiteController::class, 'storeLead'])->name('lead.store');
