<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController; //! Ajouter

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
/*           Contact             */
/***********************************/

// Je déclare un route de méthode GET
Route::get(
    // URL de la route
    '/contacts',
    [
        // Le nom complet du controller
        ContactController::class,
        // le nom de la méthode
        'contactGet'
    ]);

    // Je déclare un route de méthode POST
Route::post(
    // URL de la route
    '/contacts',
    [
        // Le nom complet du controller
        ContactController::class,
        // le nom de la méthode
        'contactPost'
    ]);
