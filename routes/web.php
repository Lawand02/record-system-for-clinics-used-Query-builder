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
|
| GET : To view web pages.
| POST : To add information to the database.
| PUT : Refreshcthe data.
| DELETE : For delete.
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/healthe','HealtheController@index')->name('healthe');

Route::get('/createpatient', function () {
    return view('createpatient');
});

Route::post('patient/create','HealtheController@create');

Route::get('patient/edit/{id}','HealtheController@edit')->name('patient.edit');

Route::PUT('patient/update/{id}','HealtheController@update')->name('patient.update');

Route::get('patient/trush/{id}','HealtheController@trush')->name('patient.delete');

Route::get('patient/show/{id}', 'HealtheController@show')->name('patient.view');

Route::get('patient/delete/all','HealtheController@deleteAll')->name('patient.delete.all');




        
//------------------------------------------------

