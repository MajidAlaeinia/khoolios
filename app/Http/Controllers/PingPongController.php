<?php

namespace MajidAlaeinnia\Khoolios\Http\Controllers;

use Illuminate\Routing\Controller;

class PingPongController extends Controller
{
    /**
     * Say hello.
     *
     * @return string
     */
    public function index()
    {
        return 'hi-from-index-method';
    }
}
