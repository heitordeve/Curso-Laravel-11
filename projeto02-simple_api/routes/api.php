<?php

use App\Http\Controllers\clientcontroller;
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

Route::get('/status', [clientcontroller::class, 'status']);
Route::get('/clients', [clientcontroller::class, 'clients']);
Route::post('/client', [clientcontroller::class, 'client']);
Route::post('/createClient', [clientcontroller::class, 'createClient']);
Route::put('/updateClient', [clientcontroller::class, 'updateClient']);
Route::delete('/deleteClient/{id}', [clientcontroller::class, 'deleteClient']);
