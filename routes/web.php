<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return '!!!';
});*/

/*Route::get('/test/', function () {
    return '!';
});*/
/*
Route::get('/dir/test/', function () {
    return '!!';
});

Route::get('/user/{id}', function ($id) {
    return $id;
});

Route::get('/user/{name}', function ($name) {
    return 'имя юзера' . $name;
});

Route::get('/sum/{num1}/{num2}', function ($num1,$num2) {
    return $num1 * $num2;
});

Route::get('/user/show_{id}', function ($id) {
    return $id;
});

Route::get('/user/{id?}', function ($id=0) {
    return $id;
});

Route::get('/user/{id}', function ($id) {
    return $id;
})->where('id','[0-9]');

Route::get('/ser/{id}/{name}', function ($id,$name) {
    return $id . $name;
})->where(['id'=>'[0-9]','name'=>'[a-z]{2,}']);

Route::get('/articles/{date}', function ($date) {
    return $date;
})->where('date','20[0-9]{2}-[0-1][0-9]-[0-3][0-9]');

Route::get('/users/{date}', function ($date) {
    return $date;
})->where('date','20[0-9]{2}-[0-1][0-9]-[0-3][0-9]');

Route::get('/userss/{order}', function ($order) {
    return $order;
})->where('order','(name|age|surname)');

Route::get('/{year}/{month}/{day}', function ($year,$month,$day) {
    $date = DateTime::createFromFormat('Y-m-d',"$year-$month-$day");
    echo $date->format('W');
})->where(['year'=>'20[0-9]{2}','month'=>'[0-1][0-9]','day'=>'[0-3][0-9]']);

//Route::get('test/show', 'TestController@show');
Route::get('pages/show/{id}', 'PageController@showOne');
Route::get('pages/all', 'PageController@showAll')->where('id','[0-9]+');
//Route::get('test/sum/{num1}/{num2}', 'TestController@sum')->where(['num1'=>'\d+','num2','\d+']);
Route::get('employee/{id}', 'EmployeeController@showOne')->where('id','[0-9]+');
Route::get('employee/{id}/{param}', 'EmployeeController@showField')->where(['id'=>'\d+','param'=>'(name|surname|salary)']);
Route::get('test/emp', 'EmployeeController@show');
//Route::get('test/new', 'EmployeeController@showTwo');
Route::get('post/{id}', 'PostController@showOne');
Route::get('posts/', 'PostController@showAll');
Route::get('product/{category_id}/{product_id}', 'ProductController@showProduct');
Route::get('product/{category_id}', 'ProductController@showCategory');
Route::get('product/', 'ProductController@showCategoryList');
//Route::get('test/', 'TestController@form');

Route::get('testa/', 'TestController@formPost');*/

/*Route::get('form', 'TestsController@form');
Route::post('result', 'TestsController@result');

Route::match( ['get','post'],'new/form/{id}/{num}', 'TestsController@oneForm');

Route::get('/test/method/', 'TestsController@anotherMethod');*/
/*Route::get('/tests/1/', 'TestsController@form');

Route::get('/tests/sendform/', 'TestsController@sendForm');
Route::get('/tests/sending/', 'TestsController@sending');*/

/*Route::get('tests/sendform', 'TestsController@sendForm');
Route::post('tests/sending', 'TestsController@sending');*/
/*Route::match(['get','post'], 'tests/sending','TestsController@sending');*/
/*Route::match(['get','post'], 'tests/{id}/{num}','TestsController@sending');*/
/*Route::match(['get','post'],'test/method', 'TestsController@sending');*/
/*Route::get('session', 'SessionController@session');*/
/*Route::get('put', 'SessionController@createSess');
Route::get('pull', 'SessionController@getSess');*/
/*Route::get('form', 'RedirectController@form');
Route::get('output', 'RedirectController@output');*/
/*Route::get('form', 'RedirectController@form');
Route::get('output/{param1}/{param2}', 'RedirectController@output') ->name('out');*/
/*Route::get('action', 'FlashController@action');
Route::get('flash', 'FlashController@flash')->name('flash');*/
/*Route::get('set', 'CookieController@form');*/
/*Route::get('query', 'QueryController@test');*/

Route::get('post/all/{order?}/{dir?}', 'PostController@getAll')->name('all')->where(['order'=>'date|title|id','dir' => 'desc|asc']);
Route::get('post/{id}', 'PostController@getOne')->where('id','^[0-9]{1,5}$');
Route::match(['get','post'],'post/new','PostController@newPost');
Route::match(['get','post'],'post/edit/{id}','PostController@editPost');
Route::get('mass','PostController@massAssignment');
Route::get('post/del/{id}','PostController@delPost');
Route::get('post/deleted','PostController@getDeletedPost');
Route::get('post/restore/{id}','PostController@restorePost');
Route::get('real','PostController@real');
