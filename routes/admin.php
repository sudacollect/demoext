<?php

$controller_prefix = "\\Gtd\\Extension\\Demo\\Http\\Controllers\\Admin\\";

Route::group([
    'as'         => 'demoext.',
    'prefix'     => 'demoext',
    // 'middleware' => 'auth:api',
], function ($router) use ($controller_prefix) {
    
    Route::get('index/{param?}', $controller_prefix.'HomeController@index');
    Route::get('help', $controller_prefix.'HomeController@help');

});
