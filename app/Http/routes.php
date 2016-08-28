<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'Controller@home');

Route::group(['prefix' => 'leads'], function (){
    Route::get('list', 'LeadController@getLeads');
    Route::get('new', 'LeadController@newLead');
    Route::get('search', function () { return view('leads.search'); });
    Route::post('store/{id?}', 'LeadController@storeLead');
    Route::get('delete/{lead}', 'LeadController@deleteLead');
    Route::get('edit/{lead}', 'LeadController@editLead');
    Route::get('view/{lead}', 'LeadController@viewLead');
});

Route::group(['prefix' => 'api'], function(){
    Route::post('/leads/save', 'LeadServiceController@save');
});


Route::auth();