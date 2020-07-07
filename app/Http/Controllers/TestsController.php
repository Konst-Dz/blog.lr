<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TestsController extends Controller
{
    /*public function form()
    {
        return view('tests.form');
    }

    public function result(Request $request)
    {

        $res = $request->input('res');
        $method = $request->method();
        $mth = ($request->isMethod('post')) ? '!' : '!!';
        return view('tests.result', [
            'ress' => $res ,
            'method' => $method,
            'mth' => $mth,
            ]);
    }*/

    /*public function oneForm(Request $request)
    {
        if ($request->isMethod('get')){
            return view('tests.oneform');
        }
        if ($request->isMethod('post')){
            $result = $request->input('one')+$request->input('two');
            $data = $request->all();
            return view('tests.oneresult',[ 'result' => $result, 'data'=>$data]);
        }
    }*/

    /*public function oneForm(Request $request,$id,$param)
    {
        if ($request->isMethod('get')){
            return view('tests.oneform');
        }
        if ($request->isMethod('post')){
            $only = $request->only('login','pass');
            $except = $request->except('name','surname');
            $uri = $request->path();
            $is = ($request->is('new/*')) ? '!' : '' ;
            $url2 = $request->url();
            $fullUrl = $request->fullUrl();
            $urlQuery = $request->fullUrlWithQuery(['bar'=>'baz']);
            return view('tests.oneresult',[
                'only' => $only,
                'except' => $except,
                'id' => $id,
                'num' => $param,
                'is' => $is,
                'url2' => $url2,
                'fullUrl' => $fullUrl,
                'urlQuery' => $urlQuery,

                ]);
        }
    }

    public function anotherMethod(Request $request)
    {
        /*$name = $request->input('user.name');
        $surname = $request->input('user.surname');
        return view('tests.file');


    }*/

    /*public function form(Request $request)
    {
        if ($request->has('one') and $request->has('two')){
            $one = $request->one;
            $two = $request->two;
            var_dump($one * $two);
            $result = $one * $two;
        }
        $result = $result ?? '';
        return view('tests.form1',['result' => $result,]);
    }

    public function sendForm()
    {
        return view('tests.sendform');
    }

    public function sending(Request $request)
    {
        $one = $request->one ?? '';
        $two = $request->two ?? '';
        $three = $request->input('three') ?? '';
        return view('tests.sending',[
            'one' => $one,
            'two' => $two,
            'three' => $three,
        ]);
    }*/

    /*public function sendForm()
    {
        return view('tests.sendform');
    }

    public function sending( Request $request )
    {
        $one = $request->one ?? '';
        $two = $request->two ?? '';
        $three = $request->input('three') ?? '';
        $method = ($request->isMethod('GET')) ? '!' : '!!';

        return view('tests.sending', [
            'one' => $one,
            'two' => $two,
            'three' => $three,
            'method' => $method,
        ]);
    }*/
    /*public function sending( Request $request )
    {
        if ($request->isMethod('GET')){
            return view('tests.sendform');
        }
        if ($request->isMethod('POST')){
            $one = $request->one;
            $two = $request->two;
            $result = $one + $two;
            return view('tests.sending', [
                'result' => $result,
            ]);
        }
    }*/

    /*public function sending( Request $request )
    {
        if ($request->isMethod('GET')){
            return view('tests.sendform');
        }
        if ($request->isMethod('POST')){
            $one = $request->one;
            $two = $request->two;
            $result = $one + $two;
            //$arr = $request->all();
            $arr = $request->only(['login','name']);
            $arr2 = $request->except(['pass','email']);
            return view('tests.sending', [
                //'result' => $result,
                'arr' => $arr,
                'arr2' => $arr2,
            ]);
        }
    }*/

    /*public function sending(Request $request, $id, $num)
    {
        if ($request->isMethod('GET')){
            return view('tests.sendform');
        }
        if ($request->isMethod('POST')){
            return view('tests.sending', [
                'id' => $id,
                'num' => $num,
            ]);
        }
    }*/

    public function sending(Request $request)
    {
        if ($request->isMethod('GET')){
            return view('tests.sendform');
        }
        if ($request->isMethod('POST')){
            $path = $request->path();
            $url = $request->url();
            $fullUrl = $request->fullUrl();
            $addUrl = $request->fullUrlWithQuery(['page'=>1]);
            return view('tests.sending',[
                'path' => $path,
                'url' => $url,
                'fullUrl' => $fullUrl,
                'addUrl' => $addUrl,
            ]);
        }
    }

}
