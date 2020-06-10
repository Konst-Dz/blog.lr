@extends('layouts.postlayout')
@section('title',$name)

@section('content')
    <section>
        @foreach($category as $key => $value)
            <div class="products">
                <h2>{{$value['name']}}</h2>
                @if($value['inStock'])
                    Цена : {{$value['cost']}}<br>
                    <a href="/product/{{$id_category}}/{{$key}}">Подробнее</a>
                @else
                    Нет в наличии
                @endif
            </div>
        @endforeach
    </section>
@endsection
