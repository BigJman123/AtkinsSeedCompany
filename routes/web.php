<?php

Route::get('/', 'HomeController@index');
Route::get('/Precision-Planting', 'PlantingController@index');
Route::get('/Pioneer', 'PioneerController@index');
Route::get('/Crop-Insurance', 'InsuranceController@index');
Route::get('/Contact-Us', 'ContactController@index');