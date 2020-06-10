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
            @if($value['salary']>2000)
            <tr>
                <td>{{$loop->iteration}}</td>
                @foreach ($value as $elem)

                    <td>{{ $elem }}</td>
                @endforeach
            </tr>
            @endif
        @endforeach
    </table>

    <table>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Статус</th>
        </tr>
        @foreach ($users as $value)
                <tr>
                    @foreach ($value as $key => $elem)
                       @if( $key == 'banned' )
                           @if($elem == true)
                                <td>Активен</td>
                           @else
                                <td>Забанен</td>
                            @endif
                       @else
                            <td>{{ $elem }}</td>
                       @endif
                    @endforeach
                </tr>
        @endforeach
    </table>

    <table>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Статус</th>
        </tr>
        @foreach ($users as $value)
            @if($value['banned'] == true)
            <tr style="{{$green}}">
            @else
                <tr style="{{$red}}">
            @endif
                @foreach ($value as $key => $elem)
                    @if( $key == 'banned' )
                        @if($elem == true)
                            <td>Активен</td>
                        @else
                            <td>Забанен</td>
                        @endif
                    @else
                        <td>{{ $elem }}</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
    </table>

    <form action="">
        @foreach($arr as $value)
            <input type="text" value="{{$value}}">
        @endforeach
    </form>

    <select name="" id="">
        @foreach($arr as $value)
            <option value="">{{$value}}</option>
        @endforeach
    </select>

    <ul>
        @foreach($month as $vslue)
            @if($day == $vslue)
                <li class="active">{{$vslue}}</li>
            @else
                <li>{{$vslue}}</li>
            @endif
        @endforeach
    </ul>

@endsection
