<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\UserController;

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

Route::get('/', [GeneralController::class, 'index']);
Route::get('/properties', [GeneralController::class, 'properties'])->name('properties');
Route::get('/agents', [GeneralController::class, 'agents'])->name('agents');
Route::get('/who-we-are', [GeneralController::class, 'whoWeAre'])->name('who.we.are');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');
Route::get('/terms-and-conditions', [GeneralController::class, 'terms'])->name('terms.and.conditions');
Route::get('/privacy-policy', [GeneralController::class, 'privacyPolicy'])->name('privacy.policy');

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Owner User Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:owner-user'])->group(function () {

    Route::get('/owner-user/home', [HomeController::class, 'ownerUserHome'])->name('owner.user.home');
});

/*------------------------------------------
--------------------------------------------
All Agent User Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:agent-user'])->group(function () {

    Route::get('/agent-user/home', [HomeController::class, 'agentUserHome'])->name('agent.user.home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

/*------------------------------------------
--------------------------------------------
All Super Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {

    Route::get('/super-admin/home', [HomeController::class, 'superAdminHome'])->name('super.admin.home');
});
