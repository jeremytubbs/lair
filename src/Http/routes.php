<?php

if (config('lair.routes.login')) {
    // Authentication routes...
    Route::get('auth/login', 'App\Http\Controllers\Auth\AuthController@getLogin');
    Route::post('auth/login', 'App\Http\Controllers\Auth\AuthController@postLogin');
    Route::get('auth/logout', 'App\Http\Controllers\Auth\AuthController@getLogout');

    // Password reset link request routes...
    Route::get('password/email', 'App\Http\Controllers\Auth\PasswordController@getEmail');
    Route::post('password/email', 'App\Http\Controllers\Auth\PasswordController@postEmail');

    // Password reset routes...
    Route::get('password/reset/{token}', 'App\Http\Controllers\Auth\PasswordController@getReset');
    Route::post('password/reset', 'App\Http\Controllers\Auth\PasswordController@postReset');
}

if (config('lair.routes.register')) {
    // Registration routes...
    Route::get('auth/register', 'App\Http\Controllers\Auth\AuthController@getRegister');
    Route::post('auth/register', 'App\Http\Controllers\Auth\AuthController@postRegister');
}