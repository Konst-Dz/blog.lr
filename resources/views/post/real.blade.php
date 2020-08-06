
{{--<table>
    @foreach($post as $item)
        <tr>
            <td>{{$item->login}}</td>
            <td>{{$item->password}}</td>
            <td>{{ !empty($item->profile) ? $item->profile->name : '' }}</td>
            <td>{{!empty($item->profile) ? $item->profile->surname : ''}}</td>
            <td>{{!empty($item->profile) ? $item->profile->email : ''}}</td>
        </tr>
    @endforeach
</table>--}}

{{--<table>
    @foreach($person as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{ !empty($item->country) ? $item->country->name : '' }}</td>
        </tr>
    @endforeach
</table>--}}

<table>
    @foreach($cities as $item)
        <tr>
            <td>{{$item->name}}</td>
    @if($item->cities)
            <td>
        @foreach($item->cities as $city)
            {{$city}}
        @endforeach
            </td>
        @endif
        </tr>
    @endforeach
</table>
