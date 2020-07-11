<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CookieController extends Controller
{


    public function form(Request $request)
    {
        if (!$request->cookie('counter')){
            return \response(1)->cookie('counter',2);

        }
        else{
            $count = $request->cookie('counter');
            return \response($count)->cookie('counter',$count+1);
        }
    }
}
