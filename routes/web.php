<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // ! Ajouter le Controller en question
use Illuminate\Http\Request;
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

// Je déclare un route de méthode GET

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[HomeController::class,'home'])->name('index');
Route::post('/',[HomeController::class,'contactSend'])->name('contactSendPage');
