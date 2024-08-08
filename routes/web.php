<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/redis', function () {
    return view('teste', [
        'visits' => Redis::incr('visits'),
        "mysql_version" => DB::select("select version()")[0]->{'version()'}
    ]);
});
