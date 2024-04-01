<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::redirect('/', '/note')->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
   //we can use the resource method to define all the routes for a controller
   /* Route::get('/note', [NoteController::class, 'index'])->name('note.index');
   Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
   Route::post('/note', [NoteController::class, 'store'])->name('note.store');
   Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.show');
   Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
   Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.update');
   Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy'); 
   */


   Route::resource('note', NoteController::class);
});

//THE MIDDLEWARE FUNCTION SITS BETWEEN THE USERS REQUEST AND THE CONTROLLER TO CHECK IF THE USER IS AUTHENTICATED OR MAKE OTHER CHECKS
Route::middleware('auth')->group(function () {
   Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::fallback(function () {
   abort(404); // Redirect to 404 page
});
require __DIR__ . '/auth.php';
