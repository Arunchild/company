<?php


$namespace = 'Company\Http\Controllers';


Route::group([
    'namespace' => $namespace,
    'middleware' => 'web'
], function(){

    Route::resource('company', 'CompanyController');

});