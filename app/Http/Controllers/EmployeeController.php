<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    private $employees = [];

    public function __construct()
    {
        $this->employees = [
            1 => [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            2 => [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            3 => [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            4 => [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            5 => [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];
    }

    public function showOne($id)
    {
        return "{$this->employees[$id]['name']},{$this->employees[$id]['surname']},{$this->employees[$id]['salary']}";

    }

    public function showField($id, $param)
    {
        return $this->employees[$id][$param];
    }


    public function showTwo()
    {
        return view('employee.new',['title'=>'new',
            'aside'=>'add entry',
            'links'=>[
                        ['text'=>'text1',
                          'href'=>'href1'
                        ],
                        ['text'=>'text2',
                            'href'=>'href2'
                        ],
                        ['text'=>'text3',
                            'href'=>'href3'
                        ],

                    ],
            'employees' => [
                [
                    'name' => 'user1',
                    'surname' => 'surname1',
                    'salary' => 1000,
                ],
                [
                    'name' => 'user2',
                    'surname' => 'surname2',
                    'salary' => 2000,
                ],
                [
                    'name' => 'user3',
                    'surname' => 'surname3',
                    'salary' => 3000,
                ],
                [
                    'name' => 'user4',
                    'surname' => 'surname4',
                    'salary' => 4000,
                ],
                [
                    'name' => 'user5',
                    'surname' => 'surname5',
                    'salary' => 5000,
                ],
            ],


            ]);
    }


    public function show($city = 'minsk',$year = '1123')
    {
        $tbl = [];
        $k=0;
        for ($i=1;$i<=5;$i++){
            for ($j=1;$j<=5;$j++) {
                $k++;
                $tbl[$i][] = $k;
            }
        }
        /*echo "<pre>";
        print_r($tbl);
        echo "</pre>";*/
        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
        ];

        $text = 'ссылка';
        $href = 'yes.ru';
        $str = '<b>строка</b>';
        return view('employee.employee',
            [   'name'=>'kolia',
                'surname'=>'iliev',
                'class'=>'user',
                'value1'=>'test1',
                'value2'=>'test2',
                'value3'=>'test3',
                'red'=>'color:red',
                'text'=>$text,
                'href'=>$href,
                'worker'=>['name'=>'serg','surname'=>'kalina','salary'=>300],
                'city'=>$city,
                'year' => $year,
                'str' => $str,
                'weekday' => 5,
                'month'=> '9',
                'age'=>17,
                'arr'=>[1,2,3],
                'arr2'=>[10,9,8],
                'data'=>9,
                'table'=>$tbl,
                'employees'=>$employees,
                'sring' =>['str','str2','str3'],
                'nums'=>[10,9,8,7,6,5,4],
                'num'=>[],


            ]);
    }

}
