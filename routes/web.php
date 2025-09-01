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


Route::get('/contact1', function () {
    $item = [
        'dueno' => 'Pablito Mendoza',
        'telefono' => '123456789',
        'email' => 'pablitomendoza@gmail.com'
    ];
    return view('contact1', $item);
});

Route::get('/contact2', function () {
    $item2 = [
        'cliente' => 'Juan Perez',
        'telefono' => '987654321',
        'email' => 'juanperez@gmail.com'
    ];
    return view('contact2', $item2);
});
