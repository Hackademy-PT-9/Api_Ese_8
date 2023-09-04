<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('/prodotti', function () {
    return
        $regioni =  [
            ['name' => 'Abruzzo'],
            ['name' => 'Basilicata'],
            ['name' => 'Calabria'],
            ['name' => 'Campania'],
            ['name' => 'Emilia-Romagna'],
            ['name' => 'Friuli-Venezia Giulia'],
            ['name' => 'Lazio'],
            ['name' => 'Liguria'],
            ['name' => 'Lombardia'],
            ['name' => 'Marche'],
            ['name' => 'Molise'],
            ['name' => 'Piemonte'],
            ['name' => 'Puglia'],
            ['name' => 'Sardegna'],
            ['name' => 'Sicilia'],
            ['name' => 'Toscana'],
            ['name' => 'Trentino-Alto Adige'],
            ['name' => 'Umbria'],
            ['name' => 'Valle Aosta'],
            ['name' => 'Veneto']


        ]; //ritorno sempre JSON
})->name('api.regioni');
