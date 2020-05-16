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

Route::get('/', function () {return view('index');});
Route::get('/configuration', function () {return view('configurations');});
Route::get('manifestation/email', 'ManifestationController@storeAndSendEmail')->name('manifestation.storeAndSendEmail');

Route::resource('department', 'DepartmentController');
Route::resource('manifestation', 'ManifestationController');
Route::resource('origin', 'OriginController');
Route::resource('followup', 'FollowUpController');

Route::get('/help', function () {return view('help');});
