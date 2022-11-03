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

Route::get('locale/{locale}', 'LocaleController@update')->name('frontend.locale');

Route::middleware(['frontend.locales'])->group(function () {

    // Route::get('/', 'FrontendController@index')->name('home');
    Route::get('/', 'FrontendController@volunteers')->name('home');

    Route::get('/about', 'FrontendController@about')->name('about');

    Route::get('/services', 'FrontendController@services')->name('services');

    Route::get('/sub-services/{service}', 'FrontendController@subServices')->name('sub.services');

    Route::get('/sub-services/show/{service}', 'FrontendController@serviceShow')->name('service.show');

    Route::get('/media', 'FrontendController@media')->name('media');

    Route::get('/events/{media}', 'FrontendController@showEvents')->name('media.events');

    Route::get('/events/show/{event}', 'FrontendController@showEvent')->name('event.show');

    Route::get('/show/reports', 'FrontendController@reports')->name('reports');

    Route::get('/volunteers', 'FrontendController@volunteers')->name('volunteers');

    Route::post('/volunteers', 'FrontendController@volunteersStore')->name('volunteers.store');

    Route::get('/donations', 'FrontendController@donations')->name('donations');

    Route::get('/contact', 'FrontendController@contact')->name('contact');

    Route::post('/contact', 'FrontendController@contactPost')->name('contact.post');

    Route::post('/subscribe', 'FrontendController@subscribePost')->name('subscribe.post');

    Route::get('/thanks', 'FrontendController@thanks')->name('thanks');

    Route::get('show/news/{news}', 'FrontendController@showNews')->name('show.news.content');

    Route::post('/download/count', 'StatisticsController@countDownload')->name('count.downloads');

    Route::post('/preview/count', 'StatisticsController@countPreview')->name('count.previews');
});
