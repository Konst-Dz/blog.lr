
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

<table>
    @foreach($person as $item)
        <tr>
            <td>{{$item->login}}</td>
            <td>{{$item->password}}</td>
            <td>{{ !empty($item->city) ? $item->city->name : '' }}</td>
        </tr>
    @endforeach
</table>
