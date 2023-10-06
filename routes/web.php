<?php

use App\Http\Controllers\FoldersCheckingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PsychotechnicTestController;
use App\Http\Controllers\TestController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route pour la page Candidature affichant les postulants et leurs statuts
Route::get('/', function () {
    return Inertia::render('ApplicationDashboard');
})->middleware(['auth', 'verified'])->name('application');

Route::get('/test', [TestController::class, 'index'])
->middleware(['auth', 'verified'])
->name('home');

// Route pour la page d'information complémentaire sur les postulants
Route::get('/foldersCheckings', [FoldersCheckingsController::class, 'index'])
->middleware(['auth', 'verified'])->name('folders-checkings');

// Route amenant vers le test psychotechnique
Route::get('/psyschotechnicTest', [PsychotechnicTestController::class, 'index'])
->middleware(['auth', 'verified'])->name('psyschotechnic-test');

// Route amenant vers le test collectif
Route::get('/collectiveTest', [CollectiveTestController::class, 'index'])
->middleware(['auth', 'verified'])->name('collective-test');

// Route amenant vers le test individuel
Route::get('/individualTest', [IndividualTestController::class, 'index'])
->middleware(['auth', 'verified'])->name('individual-test');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
