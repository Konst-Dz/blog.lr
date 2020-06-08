@extends('layouts.app')

@section('title', $title )

@section('content')
    <p>Это содержимое тела страницы.</p>
@endsection


@section('sidebar')
    @parent
    <p>{{$aside}}.</p>
    @foreach($links as $item)
        <a href="{{$item['href']}}">{{$item['text']}}</a><br>
    @endforeach
    <ul>
        @foreach($links as $item)
            <li><a href="{{$item['href']}}">{{$item['text']}}</a></li>
        @endforeach
    </ul>
    <table>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Зарплата</th>
        </tr>
        @foreach ($employees as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                @foreach ($value as $elem)
                    @if()
                    <td>{{ $elem }}</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
    </table>
@endsection
