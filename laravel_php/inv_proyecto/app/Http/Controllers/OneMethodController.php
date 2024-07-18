<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneMethodController extends Controller
{
    //
    public function __invoke()
    {
        return 'WELCOME TO ONE METHOD CONTROLLER';
    }
}
