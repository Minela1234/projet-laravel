<?php

use Illuminate\Support\Facades\Route;
Route::get('/', fn () => view('index'))->name('home');

Route::get('/login.html', fn () => view('login'))->name('login');
Route::get('/register.html', fn () => view('register'))->name('register');
Route::get('/forgot-password.html', function () {
    return view('forgot-password');
})->name('forgot-password');


Route::get('/buttons.html', fn () => view('buttons'))->name('buttons');
Route::get('/cards.html', fn () => view('cards'))->name('cards');
Route::get('/404.html', fn () => view('404'))->name('404');
Route::get('/blank.html', fn () => view('blank'))->name('blank');
Route::get('/charts.html', fn () => view('charts'))->name('charts');
Route::get('/tables.html', fn () => view('tables'))->name('tables');
// Utilities
Route::get('/utilities-color.html', fn() => view('utilities-color'))->name('utilities-color');
Route::get('/utilities-border.html', fn() => view('utilities-border'))->name('utilities-border');
Route::get('/utilities-animation.html', fn() => view('utilities-animation'))->name('utilities-animation');
Route::get('/utilities-other.html', fn() => view('utilities-other'))->name('utilities-other');
