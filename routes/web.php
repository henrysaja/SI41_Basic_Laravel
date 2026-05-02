<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/fakultas', function () {
    return view('fakultas.list-fakultas');
});
route::get('/fakultas/edit', function () {
    return view('fakultas.edit-fakultas');
});

