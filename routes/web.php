<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstTitusController;

Route::get('/', [FirstTitusController::class, 'index']);
Route::get('/chapter/{chapter_number}', [FirstTitusController::class, 'readByChapter']);
Route::get('/all-chapters', [FirstTitusController::class, 'readAllChapters']);