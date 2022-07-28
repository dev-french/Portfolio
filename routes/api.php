<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/***********************************/
/*           Category              */
/***********************************/

// Je déclare un route de méthode GET
Route::get(
    // URL de la route
    '/categories',
    [
        // Le nom complet du controller
        CategoryController::class,
        // le nom de la méthode
        'browse'
    ]);
