<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function test()
    {
        //$users = DB::table('employees')->select('name','salary')->get();
        //$users = DB::table('employees')->where('salary','=','500')->get();
        //$users = DB::table('employees')->where('salary','>','450')->get();
        //$users = DB::table('employees')->where('salary','!=','500')->get();
        //$users = DB::table('employees')->where('salary','>','400')->orWhere('id','>',4)->get();
        //$users = DB::table('employees')->where('id','=',3)->first();
        //$users = DB::table('employees')->where('id','=',3)->value('name');
        //$users = DB::table('employees')->pluck('name');
        //$users = DB::table('employees')->whereBetween('salary',[450,1100])->get();
        //$users = DB::table('employees')->whereNotBetween('salary',[300,600])->get();
        //$users = DB::table('employees')->whereIn('id',[1,2,3,5])->get();
        //$users = DB::table('employees')->whereNotIn('id',[1,2,3])->get();
        /*$users = DB::table('employees')->whereBetween('id',[1,3])->orWhere(
            function ($query){
                $query->whereBetween('salary',[400,800]);
            }
        )->get();*/
        //$users = DB::table('employees')->whereSalaryOrPosition('500','программист')->get();

        //$users = DB::table('events')->whereColumn('start','=','finish')->get();

        //$users = DB::table('employees')->orderBy('salary','desc')->get();
        //$users = DB::table('employees')->latest('birthday')->get();

        //$users = DB::table('employees')->max('salary');
        //$users = DB::table('employees')->sum('salary');

        //$users = DB::table('employees')->select('position', DB::raw('MIN(salary)'))->groupBy('position')->get();
        //$users = DB::table('employees')->select('position', DB::raw('SUM(salary)'))->groupBy('position')->get();

       // $users = DB::table('employees')->whereDate('birthday','1988-03-25')->get();
        //$users = DB::table('employees')->whereDay('birthday','25')->get();
        //$users = DB::table('employees')->whereMonth('birthday','3')->get();
        //$users = DB::table('employees')->whereYear('birthday','1990')->get();

        //$users = DB::table('users')->insertGetId(['login'=>'kas','password'=>'qwerty','email'=>'kas@mail.ru']);
        /*DB::table('users')->insert([
            ['login' => 'wer', 'password' => 'www','email'=>'taylor@example.com'],
            ['login' => 'wer1', 'password' => 'www1','email'=>'taylor1@example.com'],
            ['login' => 'wer1', 'password' => 'www1','email'=>'taylor1@example.com']
        ]);*/

        /*DB::table('users')->where('id','=',13)->update(['login' => 'qwer']);*/

        /*DB::table('users')->where('id','=',13)->delete();*/

        $users = DB::table('products')->join('categories','products.id_category','=','categories.id')
            ->select('products.*','categories.category')->get();



        return view('query.users',['users'=>$users]);
    }
}
