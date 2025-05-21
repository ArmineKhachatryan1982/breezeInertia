<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AparatController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\CategoriesFileController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\DeleteItemController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Service\ServiceDetailsController;
use App\Http\Controllers\Subscriber\SubscriberController as SubscriberSubscriberController;
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
    Artisan::call('migrate', ['--force' => true]); // Важно для продакшна


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
Route::get('/contact',[ContactController::class,'index'])->name('contact');

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
     Route::prefix('contact')->name('contact.')->group(function () {

        Route::get('list', [AdminContactController::class, 'index'])->name('list');
        Route::get('create', [AdminContactController::class, 'create'])->name('create');
        Route::post('store', [AdminContactController::class, 'store'])->name('store');
        Route::get('edit/{model}',[AdminContactController::class, 'edit'])->name('edit');
        Route::post('/{id}',[AdminContactController::class, 'update'])->name('update');
    });

});

Route::delete('delete-item/{tb_name}/{id}', [DeleteItemController::class, 'index'])->name('delete_item');
Route::post('subscriber',SubscriberController::class)->name('subscriber');

require __DIR__.'/auth.php';
