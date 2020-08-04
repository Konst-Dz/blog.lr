@if(session('success'))
    {{session('success')}}
@endif
<table>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td><a href="/post/{{ $post->id }}">{{$post->title}}</a></td>
            <td>{{$post->desc}}</td>
            <td><a href="/post/edit/{{$post->id}}">edit</a></td>
            <td><a href="/post/del/{{$post->id}}">delete</a></td>
        </tr>
    @endforeach
</table>
{{--
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
--}}
