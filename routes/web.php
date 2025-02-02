<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-rollbar', function () {
    \Log::debug('Test debug message');
    return 'Test message sent to Rollbar!';
});