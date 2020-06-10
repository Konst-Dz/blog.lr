@extends('layouts.postlayout')
@section('title',$product['name'])

@section('content')
    <section>
            @if($product['inStock'])
                Продукт на складе <br>
                Цена: {{$product['cost']}} <br>
                ОПисание: {{$product['desc']}} <br>
                Категория: <a href="/product/{{$id_category}}">{{$category['name']}}</a> <br>
            @else
                Нет на складе
            @endif
    </section>
@endsection
