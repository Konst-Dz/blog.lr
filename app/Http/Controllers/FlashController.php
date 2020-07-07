<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\EventListener\ValidateRequestListener;

class FlashController extends Controller
{
    public function action(Request $request)
    {
        if($request->has('name')){
          var_dump($request->has('name'));
          var_dump($request->name);
            $request->flash();
            return redirect()->route('flash');
        }
        else{
            return view('flash.action');
        }
        if($request->has('name')){
          return view('flash.flash',['result' => 'truw']);
        }
        else{
            return view('flash.action');
        }
    }

    public function flash(Request $request)
    {
        $result = $request->old('num1' ) + $request->old('num2' ) + $request->old('num3' ) + $request->old('num4' )
        + $request->old('num5' );
        return view('flash.flash',['result' => $result]);
    }
}
