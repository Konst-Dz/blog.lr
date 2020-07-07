{{--{{ $result }}--}}

{{--@foreach($data as $value)
{{$value}}<br>
@endforeach--}}

@foreach($only as $value)
    {{$value}}<br>
@endforeach

<ul>
@foreach($except as $item)
    <li>{{$item}}</li>
@endforeach
</ul>

{{$id }}
{{$num}}
{{$is}}
{{$url2}}
{{$fullUrl}}
{{$urlQuery}}
