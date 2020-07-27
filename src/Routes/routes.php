<?php

Route::group(['prefix' => 'api', 'middleware' => 'api'], function() {

	Route::get('S8Hello', function(){
		echo 'Hello from S8pack!';
	});

});