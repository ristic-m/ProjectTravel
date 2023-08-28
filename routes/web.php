<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContinentController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Models\Destination;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['destinations' => Destination::all()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::get('/packages/{id}', [PackageController::class, 'show'])->name('packages.show');
//Route::get('/packages/create', [PackageController::class, 'create'])->name('packages.create');
//Route::post('/packages/store', [PackageController::class, 'store'])->name('packages.store');

Route::resource('/packages', PackageController::class);

Route::resource('/emails', EmailController::class);

Route::put('/packages/{id}', [PackageController::class, 'update'])->name('packages.update');
//Route::put('/packages/{id}', [PackageController::class, 'store'])->name('packages.store');

//Route::get('/continents/{id}', [ContinentController::class, 'show'])->name('continents.show');

//Route::get('/europe', [DestinationController::class, 'europe'])->name('continents.europe');

Route::get('/continents/europe', [ContinentController::class, 'showEurope'])->name('continents.europe');
Route::get('/continents/asia', [ContinentController::class, 'showAsia'])->name('continents.asia');
Route::get('/continents/africa', [ContinentController::class, 'showAfrica'])->name('continents.africa');
Route::get('/continents/south-america', [ContinentController::class, 'showSouthAmerica'])->name('continents.southamerica');



require __DIR__.'/auth.php';
