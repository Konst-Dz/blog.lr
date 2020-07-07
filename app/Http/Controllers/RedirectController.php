<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectController extends Controller
{

    public function form(Request $request)
    {
        if ($request->has('email')){
            return redirect()->route('out',['param1'=>1,'param2'=>2]);
        }
        else{
            return view('redirect.form');
        }

    }

    public function output(Request $request)
    {

        return view('redirect.output');
    }
}
