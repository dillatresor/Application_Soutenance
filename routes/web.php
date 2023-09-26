<?php

use App\Http\Controllers\DirecteurmemoireController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\JuryController;
use App\Http\Controllers\MaitrestageController;
use App\Http\Controllers\SallesController;
use App\Http\Controllers\SoutenanceController;
use Symfony\Component\Routing\Route as RoutingRoute;

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
    return view('dashboard');
});

Route::resource('etudiants', EtudiantController::class);

Route::resource('enseignants', EnseignantController::class);

Route::resource('soutenances', SoutenanceController::class);

Route::resource('jury', JuryController::class);

Route::resource('salle', SallesController::class);

Route::resource('dm', DirecteurmemoireController::class);

Route::resource('ms', MaitrestageController::class);
