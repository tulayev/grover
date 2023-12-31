<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return redirect()->back();
});

Route::get('/change-locale/{locale}', function($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('changeLocale');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('services')->group(function() {
    Route::get('/construction', [ServiceController::class, 'construction'])->name('service.construction');
    Route::get('/distribution', [ServiceController::class, 'distribution'])->name('service.distribution');
    Route::get('/export', [ServiceController::class, 'export'])->name('service.export');
    Route::get('/battery', [ServiceController::class, 'battery'])->name('service.battery');
});

Route::prefix('projects')->group(function () {
   Route::get('/', [ProjectController::class, 'index'])->name('project.list');
   Route::get('/{slug}', [ProjectController::class, 'show'])->name('project.details');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/team-and-career', [TeamController::class, 'index'])->name('team');

Route::get('/contacts', [ContactController::class, 'index'])->name('contact');
