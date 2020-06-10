@extends('layouts.postlayout')
@section('title','Список станиц')

@section('content')
    @foreach($posts as $key=>$value)
<div class="post">
    <h2>{{$value['title']}}</h2>
    <div class="info">
        <span class="date">{{$value['date']}}</span>
        <span class="author">{{$value['author']}}</span>
    </div>
    <div class="text">
        {{$value['teaser']}}
    </div>
    <div class="more">
        <a href="post/{{$key}}">Подробнее</a>
    </div>
</div>
    @endforeach
@endsection
