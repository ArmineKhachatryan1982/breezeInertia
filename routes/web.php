<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AparatController;
use App\Http\Controllers\CategoriesFileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Service\ServiceDetailsController;
use App\Http\Controllers\SubscriberController;
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
Route::get('/servise-details/{id}',[ServiceDetailsController::class,'show'])->name('service-details');
Route::post('/subscriber',[SubscriberController::class,'index'])->name('subscriber');

Route::get('upload_file',[CategoriesFileController::class,'index'])->name('upload_file');
Route::post('category_file',[CategoriesFileController::class,'store'])->name('category_file');


Route::get('get-file', [FileUploadService::class, 'get_file'])->name('get-file');
Route::get('/admin',[AdminController::class,'index'])->name('admin.index');

// Route::get('create-aparat',[AparatController::class,'index'])->name('aparat.create');
// Route::post('store',[AparatController::class,'store'])->name('aparat.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('aparat')->name('aparat.')->group(function () {

        Route::get('list', [AparatController::class, 'index'])->name('list');
        Route::get('create', [AparatController::class, 'create'])->name('create');
        Route::post('store', [AparatController::class, 'store'])->name('store');
        Route::get('edit/{model}',[AparatController::class, 'edit'])->name('edit');
        Route::post('/{id}',[AparatController::class, 'update'])->name('update');
    });
});



require __DIR__.'/auth.php';
