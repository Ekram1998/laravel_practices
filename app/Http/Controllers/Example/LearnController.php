<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearnController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $a = 5;
        $b = 6;
        $c = $a + $b;
        return "The Result is : ". $c;
    }
}
