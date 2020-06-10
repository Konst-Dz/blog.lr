@extends('layouts.postlayout')

@section('title',$posts['title'])

@section('content')
<div class="info">
    <span class="date">{{$posts['date']}}</span>
    <span class="author">{{$posts['author']}}</span>
</div>
<div class="text">
    {{$posts['text']}}
</div>
@endsection
