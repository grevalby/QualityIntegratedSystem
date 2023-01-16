<?php

use App\Http\Controllers\ChangePointController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DefectListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\Project;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('landing.index');
});

/* Route::controller(DashboardController::class)->group(function(){
    Route::get('/defectlist','defectlist');
}); */

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
	return view('dashboard.index');
})->middleware('auth');
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/defectlist', [DefectListController::class, 'index']);
Route::get('/machine', [MachineController::class, 'index']);
Route::get('/changepoint', [ChangePointController::class, 'index']);

