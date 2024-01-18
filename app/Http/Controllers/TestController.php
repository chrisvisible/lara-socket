<?php

namespace App\Http\Controllers;

use App\Events\TestWebSocket;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        event(new TestWebSocket);
    }
}
