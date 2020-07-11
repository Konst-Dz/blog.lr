<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FlashController extends Controller
{
    public function action(Request $request)
    {
        /*if($request->has('name') and $request->has('age') ){
          var_dump($request->has('name'));
          var_dump($request->name);
            $request->flash();
            return redirect()->route('flash');
        }
        else{
            return view('flash.action');
        }*/
        return response()->view('flash.action')->header('Content-Type','text/plain');

    }

    public function flash(Request $request)
    {


        return view('flash.flash',['result' => old('name')]);
    }
}
