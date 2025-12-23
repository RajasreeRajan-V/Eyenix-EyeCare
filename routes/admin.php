<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;

use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {
    Route::post("/do-login", [LoginController::class,'doLogin'])->name('do.login');
   
     Route::middleware(['auth:admin'])->group(function () {

      Route::get("/dashboard", [DashboardController::class,'dashboard'])->name('dashboard');
      
      Route::resource('contactus', ContactusController::class);

      Route::post('/contact/reply', [ContactusController::class, 'reply'])->name('contact.reply');
      Route::resource('brand', BrandController::class);
      Route::resource('frame', FrameController::class);
      Route::resource('shape', ShapeController::class);

      Route::delete('/material/{material}', [FrameController::class, 'destroyMaterial'])
        ->name('material.destroy');

      Route::delete('/frame-type/{frameType}', [FrameController::class, 'destroyFrameType'])
        ->name('frame-type.destroy');

      Route::put('/material/{id}/update', [FrameController::class, 'updateMaterial'])
        ->name('material.update'); 
        
      Route::put('/frame-type/{id}/update', [FrameController::class, 'updateFrameType'])
        ->name('frame-type.update');

      Route::resource('ProductColor', ProductColorController::class);  

      Route::resource('service', ServiceController::class);

      Route::resource('about', AboutController::class);

      Route::resource('AdminGallery', GalleryController::class);

      Route::resource('ContactLens', ContactLensController::class);

      Route::resource('Collection', CollectionController::class);

      Route::resource('EyeCamp', EyeCampController::class);

     });
});