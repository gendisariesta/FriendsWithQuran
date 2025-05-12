<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuranController;

Route::get('/',[QuranController::class, 'index'])->name('quran.index');
Route::get('index',[QuranController::class, 'index'])->name('quran.index');
Route::get('quran',[QuranController::class, 'listQuran'])->name('quran.listQuran');
Route::get('quran/{no}',[QuranController::class, 'readQuran'])->name('quran.readQuran');
Route::get('journal',[QuranController::class, 'readJournal'])->name('quran.readJournal');
Route::get('journaling',[QuranController::class, 'writeJournal'])->name('quran.writeJournal');
Route::post('journaling/post',[QuranController::class, 'submitJournal'])->name('quran.submitJournal');


