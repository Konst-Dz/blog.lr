
@extends('layouts.postlayout')
@section('title','All categories')

@section('content')
    <section>
        @foreach($list as $key => $value)

                <h2>{{$value['name']}}</h2>
                {{count($value['products'])}} товаров.
                <a href="/product/{{$key}}">Подробнее</a>

        @endforeach
    </section>
@endsection
