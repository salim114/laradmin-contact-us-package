<?php 

Route::group(['namespace'=>'kossa\Laradmin\Http\Controllers'],function(){

	Route::get('laradmin', 'LaradminController@index')->name('laradmin');
	Route::post('laradmin', 'LaradminController@send');

});

	
	// return $request->all();



