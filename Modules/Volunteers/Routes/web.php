<?php

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

Route::middleware('dashboard')->prefix('dashboard')->as('dashboard.')->group(function () {
    Route::get('volunteers/questions', 'VolunteersController@questions')->name('volunteers.questions');
    Route::resource('volunteers', 'VolunteersController');
    Route::resource('fields', 'FieldsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('fourquestions', 'FourQuestionController');
    Route::resource('fivequestions', 'FiveQuestionController');
    Route::resource('sixquestions', 'SixQuestionController');
});
