<?php

use Illuminate\Support\Facades\Route;

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

/********************GLOBAL ROUTES****************/
#changelang
View::share('change_lang', function ($locale) {
    $segments = Request::segments();
    $segments[0] = $locale;

    return URL::to(implode('/', $segments));
});

Route::get('/', function () {
    return view('app.index');
});

Route::get('admin', function () {
    return view('admin.index');
});

