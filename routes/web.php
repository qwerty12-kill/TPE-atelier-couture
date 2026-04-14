<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CoutureController;
use App\Http\Controllers\PaiementClientController;
use App\Http\Controllers\PaiementAgentController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\DashboardController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::resource('clients', ClientController::class);
Route::resource('agents', AgentController::class);
Route::resource('coutures', CoutureController::class);
Route::resource('depenses', DepenseController::class);

Route::post('paiement-client', [PaiementClientController::class, 'store'])->name('paiement.client');
Route::post('paiement-agent', [PaiementAgentController::class, 'store'])->name('paiement.agent');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');