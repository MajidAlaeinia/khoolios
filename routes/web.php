<?php



Route::get('ping-get', function () {
    return 'pong-get';
});

Route::get('ping-controller-get', [\MajidAlaeinnia\Khoolios\Http\Controllers\PingPongController::class, 'index'])->name('ping-pong.index');
