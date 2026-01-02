<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [CustomerController::class, 'dashboard'])->name('dashboard');
Route::get('/about' , [CustomerController::class, 'about'])->name('about');
Route::get('/service' , [CustomerController::class, 'service'])->name('service');
Route::get('/gallery' , [CustomerController::class, 'gallery'])->name('gallery');
Route::get('/eyeglass' , [CustomerController::class, 'eyeglass'])->name('eyeglass');

Route::get('/eyeglass/filter', [CustomerController::class, 'filterEyeglasses'])->name('eyeglass.filter');

Route::get('/sunglass' , [CustomerController::class, 'sunglass'])->name('sunglass');

Route::get('/sunglass/filter', [CustomerController::class, 'filterSunglasses'])->name('sunglass.filter');


Route::resource('contact', ContactUsController::class);

Route::get('/Eyecamp' , [CustomerController::class, 'eyecamp'])->name('eyecamp');

Route::post('/Appointment' , [CustomerController::class, 'AppointmentStore'])->name('appointment.store');

Route::get('/contactlens' , [CustomerController::class, 'contactlens'])->name('contactlens');

Route::get('/contactlens/solutions' , [CustomerController::class, 'contactlensSolutions'])->name('contactlens.solutions');

Route::get('/lens-solutions', [CustomerController::class, 'contactlensSolutions'])
    ->name('lens.solutions');







require __DIR__.'/auth.php';
