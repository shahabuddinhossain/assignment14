<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function return_name (Request $request){
        $name       =   $request->input('name');
        $userAgent  =   $request->header('user-agent');
        $page       =   $request->query('page', null);
        $rememberToken = $request->cookie('remember_token', null);


        return response()->json([
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 25
            ]
        ]);

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName();
            $file->move('public/uploads', $fileName);
        }

    }
}

