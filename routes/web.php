<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [CustomerController::class, 'dashboard'])->name('dashboard');
Route::get('/about' , [CustomerController::class, 'about'])->name('about');
Route::get('/service' , [CustomerController::class, 'service'])->name('service');
Route::resource('contact', ContactUsController::class);

Route::get('/Eyecamp' , [CustomerController::class, 'eyecamp'])->name('eyecamp');

Route::post('/Appointment' , [CustomerController::class, 'AppointmentStore'])->name('appointment.store');









// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
