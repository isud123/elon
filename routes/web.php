<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/news/{id}', function ($id) {
    // Query from the database

    // return view  with data

})->name('news.detail');
