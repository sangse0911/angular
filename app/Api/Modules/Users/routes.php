<?php

$namespace = 'App\Api\Modules\Users\Controllers';

Route::group(
    ['module' => 'Users', 'namespace' => $namespace],
    function () {
        Route::get('user', [
            # middle here
            'as'   => 'index',
            'uses' => 'UserController@index',
        ]);
    }
);
