<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
//ROUTE PRAK 1
Route::resource('articles', ArticleController::class);
//route untuk fungsi cetak pdf
Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);
