<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "Welcome";
});

Route::get('/testView', function () {
    return view('test');
});

Route::get('/crudExample', function () {
    $age = 28;
    $data = ['name' => 'Jesus Lopez', 'age' => $age];

    return view('crud/index', $data);
})->name('crud');
