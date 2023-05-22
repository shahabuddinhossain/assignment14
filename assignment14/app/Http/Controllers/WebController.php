<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function return_name (Request $request){
        $request->input('name');
    }
}
