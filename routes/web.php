<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index','WebViewController@index');
Route::get('/login','WebViewController@login');
Route::get('/client-login','WebViewController@client_login');
Route::get('/pharmacist-registration','WebViewController@pharmacist_registration');
Route::get('/client-registration','WebViewController@client_registration');
Route::get('/doctor-registration','WebViewController@doctor_registration');