<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes (login/logout), with registration disabled.
Auth::routes(['register' => false]);

// Redirect authenticated users to the home dashboard.
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Only logged-in users can access the admin panel.
Route::middleware('auth')->group(function () {
    Route::resource('companies', App\Http\Controllers\CompanyController::class);
    Route::resource('employees', App\Http\Controllers\EmployeeController::class);
});