<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PageController
{
    public function showOne($id)
    {
        $pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];
        return (isset($pages[$id])) ?  $pages[$id] : "page not found";
    }

    public function showAll()
    {
        return 'string all';
    }


}
