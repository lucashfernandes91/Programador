<?php

Route::get('/{any}', function () {
  return view('index');
})->where('any', '.*');

Route::get('/', function(){
	return view('index');
});