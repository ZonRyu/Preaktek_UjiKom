<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\GaleriController;

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

Route::redirect("/", "login");

Route::get("login", function() {
    return view("login");
});

Route::get("register", function() {
    return view("register");
});

Route::get("home", function() {
    return view("home");
});

Route::post("registerFunction", [AccountController::class, 'register']);
Route::post("loginFunction", [AccountController::class, 'login']);

Route::post("addImage", [GaleriController::class, 'create']);
Route::get("add-image", [GaleriController::class, 'index']);

Route::get("logout", [AccountController::class, 'logout']);