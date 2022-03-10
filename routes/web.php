<?php

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
    return redirect('/landing');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::get('/landing', [\App\Http\Controllers\HomeController::class, 'index'])->name('main.landing');
Route::get('/forms/', [\App\Http\Controllers\HomeController::class, 'form'])->name('applicants.form');

Route::post('/form/submit', [\App\Http\Controllers\HomeController::class, 'submit'])->name('applicants.form.submit');
Route::get('/form/success', [\App\Http\Controllers\HomeController::class, 'success'])->name('applicants.form.success');
Route::get('/main/success', [\App\Http\Controllers\HomeController::class, 'landingSuccess'])->name('landing.success');


Route::group(['prefix' => 'admin', 'as' => 'admin.',], function () {

	/** APPLICANTS ROUTE **/
    Route::group(['prefix' => 'applicant', 'as' => 'applicants.', 'middleware' => ['auth:sanctum', 'verified']], function () {
        Route::get('/list',[\App\Http\Controllers\HomeController::class, 'adminList'])->name('index');
        Route::get('/view/{id}', [\App\Http\Controllers\HomeController::class, 'view'])->name('view');
        Route::put('/update/{id}', [\App\Http\Controllers\HomeController::class, 'update'])->name('update');
    });

});

