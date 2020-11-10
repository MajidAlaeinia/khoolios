<?php

use MajidAlaeinnia\Khoolios\App\Http\Controllers\PingPongController;

Route::get('ping-get', function () {
    return 'pong-get';
});

Route::get('ping-controller-get', [PingPongController::class, 'index'])->name('ping-pong.index');
