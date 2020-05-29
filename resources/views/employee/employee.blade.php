<!DOCTYPE html>
<html>
<head>
    <title>My view</title>
</head>
<body>
<p>{{$name}}</p>
<p class="{{$class}}">{{$surname}}</p>

<input type="text" value="{{$value1}}">
<input type="text" value="{{$value2}}">
<input type="text" value="{{$value3}}">

<p style="{{$red}}">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Cupiditate deserunt doloribus eaque et fugit similique sint veniam.
    Architecto consequuntur deleniti doloribus,
    eligendi est ipsam quam tenetur veritatis voluptas, voluptatem voluptatibus!</p>

<a href="{{$href}}">{{$text}}</a>
{-- lol --}
<p>Текущая дата - {{ date('Y-m-d h:i:s',time()) }}</p>
<p>{{$worker['name']}}</p>
<p>{{$worker['surname']}}</p>
<p>{{$worker['salary']}}</p>
<p>В массиве {{'$worker'}} - {{count($worker)}} элементов.</p>
{{ isset($city) ? $city : 'moscow' }}
{{ isset($year) ? $year : date('Y') }}
{!! $str !!}
{{-- Этого комментария не будет в итоговом HTML --}}
@php
for ($i=1;$i<5;$i++){
echo $i;
}
@endphp

@if($weekday == 7)
Воскресение
    @else
    Рабочий день
@endif

@if($weekday == 6)
    Суббота
@endif

@if($month == 6)
    Лето
@elseif($month == 9)
    Осень
@endif

@unless($age>18)
Пока нельзя
@endunless

@if(count($arr)>0)
     {{array_sum($arr)}}
@endif

<ul>
    @foreach ($arr2 as $elem)
        <li>{{ $elem}}</li>
    @endforeach
</ul>

<ul>
    @foreach ($arr2 as $elem)
        <li>{{ $elem*$elem }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($arr2 as $key=>$elem)
        <li>{{ $key+1 }}-{{$elem}}</li>
    @endforeach
</ul>

<ul>
    @foreach ($arr2 as $elem)
        @if(($elem % 2) == 0)
        <li>{{$elem}}</li>
        @endif
    @endforeach
</ul>

@if(is_array($data))
    <ul>
        @foreach ($data as $elem)
                <li>{{$elem}}</li>

        @endforeach
    </ul>
@elseif(is_numeric($data))
<p>{{$data}}</p>
@endif

<table>
    @foreach ($table as $subArr)
        <tr>
            @foreach ($subArr as $elem)
                <td>{{ $elem }}</td>
            @endforeach
        </tr>
    @endforeach
</table>

<ul>
    @foreach ($employees as $user)
        <li>{{ $user['name'] }} {{ $user['surname'] }} {{ $user['salary'] }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($sring as $user)
        <li>{{$loop->index}} - {{$user }} </li>
    @endforeach
</ul>

<ul>
    @foreach ($sring as $user)
        <li>{{$loop->iteration}} - {{$user }} </li>
    @endforeach
</ul>

<ul>
    @foreach ($sring as $user)
        @if($loop->first)
            <li class="first">{{$user }} </li>
        @elseif ($loop->last)
            <li class="last">{{$user }} </li>
        @else
        <li>{{$user }} </li>
        @endif
    @endforeach
</ul>


    @foreach ($nums as $user)
        @if($loop->remaining > 2 )
            {{$loop->remaining}}
            <b>{{$user }} </b>
        @else
            {{$loop->remaining}}
            <i>{{$user }} </i>
        @endif
    @endforeach

@foreach ($nums as $user)
    @if($user == 9)
        @continue
    @endif
    <i>{{$user }} </i>
    @if($user == 6)
        @break
    @endif
@endforeach

@forelse($num as $elem)
    <p>{{ $elem }}</p>
@empty
    <p>В массиве нет элементов</p>
@endforelse


</body>
</html>
