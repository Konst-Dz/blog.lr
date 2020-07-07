<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SessionController extends Controller
{
    /*public function session(Request $request)
    {
        $value = $request->session()->get('counter');

            if(!isset($value)){
                $request->session()->put('counter',1);
                $value = $request->session()->get('counter');
            }
            else{
                $request->session()->put('counter',$value+1);
                $value = $request->session()->get('counter');
            }

        return view('session.counter',['value' => $value]);

    }*/

    /*public function session(Request $request)
    {
        $value = $request->session()->get('counter',1);
        $request->session()->put('counter',$value+1);

        return view('session.counter',['value' => $value]);

    }*/

    /*public function session(Request $request)
    {
        $value = $request->session()->get('time');

        if (!isset($value)){
        $date = date('h-i-s',time());
        $request->session()->put('time',$date);
        $value = $request->session()->get('time');
        }

        return view('session.counter',['value' => $value]);
    }*/

    /* public function session(Request $request)
     {

             $request->session()->put('arr',[1,2,3]);
             $request->session()->push('arr',4);
             $request->session()->forget('arr');
             var_dump($request->session()->get('arr'));

         return view('session.counter');
     }*/


    /*public function createSess(Request $request)
    {
        $request->session()->put('name', 'kas');
        $request->session()->put('name2', 'kas2');
        $request->session()->put('name3', 'kas3');
        return view('session.counter');
    }

    public function getSess(Request $request)
    {


        if ($request->session()->has('test')){
            $test = $request->session()->get('test');
        }
        else{
            $test = $request->session()->get('test',function(){return date('H-i-s',time()); } );
        }

        return view('session.counter',['test' =>$test]);

    }*/
    public function createSess(Request $request)
    {
        $request->session()->put('name', 'kas');
        $request->session()->put('name2', 'kas2');
        $request->session()->put('name3', 'kas3');
        return view('session.counter');
    }

    public function getSess(Request $request)
    {


        session(['test' => '123']);
        $test = session('test');

        return view('session.counter',['test' =>$test]);

    }
}
