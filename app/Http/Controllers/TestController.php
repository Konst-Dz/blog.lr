<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /*public function form(Request $request)
    {
        if ($request->has('text')) {
        //var_dump($request->input('text'));
            $text = $request->text;
        }
        else{
            $text ='';
        }
        if ($request->has('num')) {
             $num = $request->input('num') * $request->input('num');
        }
        else{
            $num = '';
        }
        if ($request->has('hum') and $request->has('sum')){
            $sum = $request->sum * $request->hum;
        }
        else{
            $sum = '';
        }
        return view('test.form',[
            'text' => $text,
            'num' => $num,
            'sum' => $sum,
        ]);
    }

   /* public function result(Request $request)
    {
        $row = $request->post;
        /*$num1 = $request->input('1');
        $num2 = $request->input('2');
        $num3 = $request->input('3');*/
       // return view('test.result',[
            /*'num1'=>$num1,
            'num2'=>$num2,
            'num3'=>$num3,*/
           // 'post'=>$row
            //]);

   // }

    public function formPost()
    {
        return view('test.newpost');
    }

    public function resultPost(Request $request)
    {
        $newPost = $request->input('text');
        return view('test.newresult',[ 'new' => $newPost] );
    }
}
