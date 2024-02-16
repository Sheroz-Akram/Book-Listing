<?php

use App\Http\Controllers\BookPostController;
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

Route::get("/", [BookPostController::class, "index"]);
Route::view("/NewListing", "NewListing");
Route::post("SubmitPost", [BookPostController::class, "store"]);
Route::post("Search", [BookPostController::class, "search"]);