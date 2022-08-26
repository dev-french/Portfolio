<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // ! don't forget to add the controller in question for each new road ;)
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


Route::get('/', [HomeController::class, 'home'])->name('index'); // Je déclare ma route principal en méthode get

Route::post('/', [HomeController::class, 'contactSend'])->name('contactSendPage'); // Je déclare une route en post pour récupérer les informations de mon formulaire
