<?php


Route::get('ping-get', function () {
    return 'pong-get';
});

Route::get('ping-controller-get', ['PingPongController@index'])->name('ping-pong.index');
