<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/veloboerse-basel', function () {
    return view('pages/veloboerse-basel');
});

Route::get('/veloboerse-zuerich', function () {
    return view('pages/veloboerse-zuerich');
});

Route::get('/veloboerse-bern', function () {
    return view('pages/veloboerse-bern');
});

Route::get('/veloboerse-luzern', function () {
    return view('pages/veloboerse-luzern');
});

Route::get('/veloboerse-winterthur', function () {
    return view('pages/veloboerse-winterthur');
});

Route::get('/veloboerse-datum', function () {
    return view('pages/veloboerse-datum');
});

Route::get('/fahrrad-kaufen-verkaufen', function () {
    return view('pages/fahrrad-kaufen-verkaufen');
});

Route::get('/veloboerse-eintragen', function () {
    return view('pages/veloboerse-eintragen');
});

Route::get('/veloboerse-olten', function () {
    return view('pages/veloboerse-olten');
});

Route::get('/velo-recycling', function () {
    return view('pages/velo-recycling');
});

Route::get('/veloboerse-biel', function () {
    return view('pages/veloboerse-biel');
});

Route::get('/about-veloboersen-ch', function () {
    return view('pages/about-veloboersen-ch');
});