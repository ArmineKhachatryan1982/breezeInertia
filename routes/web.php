<?php

use App\Http\Controllers\CategoriesFileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Service\ServiceDetailsController;
use App\Models\ServiceDetails;
use App\Services\FileUploadService;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::get('/clear-cache', function() {

    $run = Artisan::call('config:clear');

    $run = Artisan::call('cache:clear');

    $run = Artisan::call('config:cache');


    return 'FINISHED';

});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/',[ FrontendController::class,'index' ])->name('home');
Route::get('/booking',[ FrontendController::class,'booking' ])->name('booking');
Route::get('/services',[ ServiceController::class,'index'])->name('services');

Route::get('/services/{id}', [ServiceController::class, 'show'])->name('service.show');

Route::get('/servise-details/{id}',[ServiceDetailsController::class,'show'])->name('service-details');
Route::get('upload_file',[CategoriesFileController::class,'index'])->name('upload_file');
Route::post('category_file',[CategoriesFileController::class,'store'])->name('category_file');


Route::get('get-file', [FileUploadService::class, 'get_file'])->name('get-file');

require __DIR__.'/auth.php';
