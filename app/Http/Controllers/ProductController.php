<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
  private $categories;
  public function __construct()
  {
      $this->categories = [
          1 => [
              'name' => 'Категория 1',
              'products' => [
                  1 => [
                      'name'    => 'Продукт 1',
                      'cost'    => '300',
                      'inStock' => true,
                      'desc'    => 'Описание продукта 1'
                  ],
                  2 => [
                      'name'    => 'Продукт 2',
                      'cost'    => '400',
                      'inStock' => true,
                      'desc'    => 'Описание продукта 2'
                  ],
                  3 => [
                      'name'    => 'Продукт 3',
                      'cost'    => '500',
                      'inStock' => false,
                      'desc'    => 'Описание продукта 3'
                  ],
              ],
          ],
          2 => [
              'name' => 'Категория 2',
              'products' => [
                  1 => [
                      'name'    => 'Продукт 1',
                      'cost'    => '700',
                      'inStock' => true,
                      'desc'    => 'Описание продукта 1'
                  ],
                  2 => [
                      'name'    => 'Продукт 2',
                      'cost'    => '800',
                      'inStock' => false,
                      'desc'    => 'Описание продукта 2'
                  ],
                  3 => [
                      'name'    => 'Продукт 3',
                      'cost'    => '900',
                      'inStock' => false,
                      'desc'    => 'Описание продукта 3'
                  ],
              ],
          ],
      ];
  }

    public function showProduct($id_category, $id_product)
    {
        $category = $this->categories[$id_category];
        $product = $this->categories[$id_category]['products'][$id_product];
        return view('product.product',[
            'category' => $category,
            'product' => $product,
            'id_category' => $id_category
        ]);

    }

    public function showCategory($id_category)
    {
        $category=$this->categories[$id_category]['products'];
        $name = $this->categories[$id_category]['name'];
        return view('product.category',[
            'name'=>$name,
            'category' => $category,
            'id_category' => $id_category,
            ]);
    }

    public function showCategoryList()
    {
        return view('product.all',[

            'list' => $this->categories,
            ]);
    }
}
