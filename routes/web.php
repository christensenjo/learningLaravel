<?php

use App\Http\Controllers\PlaylistController;
use Illuminate\Support\Facades\Route;

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

//Common Resource (eg playlist, employee, listing) Routes
// index -- show all
// show -- show single
// create -- show form to create new
// store -- store new
// edit -- show form to edit
// update -- update
// destroy -- delete

// All Playlists Display
Route::get('/', [PlaylistController::class, 'index']);

// Create new playlist
Route::get('/playlists/add', [PlaylistController::class, 'create']);

// Store playlist data
Route::post('/playlists', [PlaylistController::class, 'store']);






// Single Playlist Display
Route::get('/playlists/{playlist}', [PlaylistController::class, 'show']);


