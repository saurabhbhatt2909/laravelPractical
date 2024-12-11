<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ComboPlanController;
use App\Http\Controllers\EligibilityCriteriaController;

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
    return view('welcome');
});

Route::resource('plan', PlanController::class);

Route::resource('comboplan', ComboPlanController::class);

Route::resource('eligibilitycriteria', EligibilityCriteriaController::class);
